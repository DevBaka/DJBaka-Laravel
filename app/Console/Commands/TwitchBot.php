<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\TwitchChatCommand;
use App\Models\ChatMessage;

class TwitchBot extends Command
{
    protected $signature = 'twitch:bot';
    protected $description = 'Simple Twitch Chat Bot';

    /**
     * Parse IRC message tags
     */
    protected function parseTags($data)
    {
        $tags = [];
        if (preg_match('/@([^ ]+) :/', $data, $tagMatch)) {
            $tagString = $tagMatch[1];
            $tagPairs = explode(';', $tagString);
            foreach ($tagPairs as $pair) {
                list($key, $value) = explode('=', $pair, 2);
                $tags[$key] = $value;
            }
        }
        return $tags;
    }

    public function handle()
    {
        $server = 'irc.chat.twitch.tv';
        $port = 6667;
        $nickname = env('TWITCH_BOT_NAME');
        $token = env('TWITCH_BOT_TOKEN');
        $channel = 'deejaybaka';

        $socket = fsockopen($server, $port, $errno, $errstr, 30);

        if (!$socket) {
            $this->error("Verbindung fehlgeschlagen: $errstr ($errno)");
            return 1;
        }

        fwrite($socket, "PASS $token\r\n");
        fwrite($socket, "NICK $nickname\r\n");
        fwrite($socket, "CAP REQ :twitch.tv/tags twitch.tv/commands twitch.tv/membership\r\n");

        $joinChannel = ltrim($channel, '#');
        $ircChannel = "#$joinChannel";
        fwrite($socket, "JOIN $ircChannel\r\n");

        echo "Bot gestartet. Lausche auf $ircChannel ...\n";

        sleep(2);
        fwrite($socket, "PRIVMSG $ircChannel :Testnachricht: bin ich drin?\r\n");

        $startNachrichtGesendet = false;
        $activeUsers = [];

        while (!feof($socket)) {
            $data = fgets($socket, 512);
            if (!$data) {
                continue;
            }

            $data = trim($data);
            echo "<<< RAW: $data\n";

            if (strpos($data, 'PING :tmi.twitch.tv') !== false) {
                fwrite($socket, "PONG :tmi.twitch.tv\r\n");
                continue;
            }

            if (!$startNachrichtGesendet && preg_match('/^:tmi\.twitch\.tv 366 /', $data)) {
                fwrite($socket, "PRIVMSG $ircChannel :Bot ist online!\r\n");
                $startNachrichtGesendet = true;
                continue;
            }

            // Match IRC message with tags (updated regex to handle Twitch IRC format)
            if (preg_match('/:(\w+)!\w+@\w+\.tmi\.twitch\.tv PRIVMSG #(\w+) :(.*)/', $data, $matches)) {
                $username = $matches[1] ?? 'user';
                $channelName = $matches[2] ?? 'unknown';
                $message = trim($matches[3] ?? '');

                // Parse tags if they exist
                $tags = [];
                if (preg_match('/@([^ ]+) :/', $data, $tagMatch)) {
                    $tagString = $tagMatch[1];
                    $tagPairs = explode(';', $tagString);
                    foreach ($tagPairs as $pair) {
                        @list($key, $value) = explode('=', $pair, 2);
                        if ($key) {
                            $tags[$key] = $value ?? '';
                        }
                    }
                }

                echo "Nachricht von $username in #$channelName: $message\n";
                if (!empty($tags)) {
                    echo "Tags: " . json_encode($tags) . "\n";
                }

                // Save message to database
                try {
                    $chatMessage = new ChatMessage([
                        'username' => $username,
                        'channel' => $channelName,
                        'message' => $message,
                        'tags' => $tags
                    ]);
                    
                    if ($chatMessage->save()) {
                        echo "Nachricht in Datenbank gespeichert (ID: {$chatMessage->id})\n";
                    } else {
                        $this->error("Konnte Nachricht nicht speichern");
                    }
                } catch (\Exception $e) {
                    $this->error("Fehler beim Speichern der Nachricht: " . $e->getMessage());
                    if (strpos($e->getMessage(), 'SQLSTATE') !== false) {
                        $this->error("SQL Fehler: " . $e->getMessage());
                    }
                }

                // Aktiven Nutzer merken
                if (!in_array($username, $activeUsers)) {
                    $activeUsers[] = $username;
                }

                // Extrahiere Kommando und Argumente
                $parts = explode(' ', $message);
                $cmdName = strtolower($parts[0]);
                $args = array_slice($parts, 1);

                $command = TwitchChatCommand::whereRaw('LOWER(command) = ?', [$cmdName])->first();

                if ($command) {
                    echo "DB-Command gefunden: " . $command->command . "\n";

                    // Platzhalter ersetzen
                    $responseText = $command->response;

                    // {user} ersetzen (immer vorhanden)
                    $responseText = str_replace('{user}', "@$username", $responseText);

                    // {arg1} ersetzen – entweder mit Argument oder zufälligem aktiven User
                    if (count($args) >= 1 && !empty($args[0])) {
                        // Doppelte @ vermeiden
                        $arg1 = ltrim($args[0], '@');
                        $responseText = str_replace('{arg1}', "@$arg1", $responseText);
                    } else {
                        $candidates = array_filter($activeUsers, fn($u) => strtolower($u) !== strtolower($username));
                        $randomUser = count($candidates) > 0 ? $candidates[array_rand($candidates)] : 'niemand';
                        $responseText = str_replace('{arg1}', "@$randomUser", $responseText);
                    }

                    // Nachricht senden
                    $response = "PRIVMSG $ircChannel :$responseText\r\n";
                    fwrite($socket, $response);
                    echo "Antwort gesendet: $responseText\n";
                } else {
                    echo "Kein DB-Command für Nachricht: $message\n";

                    if (strcasecmp($message, '!hello') === 0) {
                        $response = "PRIVMSG $ircChannel :Hallo Welt, @$username!\r\n";
                        fwrite($socket, $response);
                        echo "Antwort gesendet an $username\n";
                    }
                }
            }
        }

        fclose($socket);
        return 0;
    }
}
