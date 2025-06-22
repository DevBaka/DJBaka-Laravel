<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\TwitchChatCommand;

class TwitchBot extends Command
{
    protected $signature = 'twitch:bot';
    protected $description = 'Simple Twitch Chat Bot';

    public function handle()
    {
        $server = 'irc.chat.twitch.tv';
        $port = 6667;
        $nickname = env('TWITCH_BOT_NAME');
        $token = env('TWITCH_BOT_TOKEN');
        $channel = 'deejaybaka'; // z. B. "#deejaybaka"

        $socket = fsockopen($server, $port, $errno, $errstr, 30);

        if (!$socket) {
            $this->error("Verbindung fehlgeschlagen: $errstr ($errno)");
            return 1;
        }

        // Login
        fwrite($socket, "PASS $token\r\n");
        fflush($socket);
        fwrite($socket, "NICK $nickname\r\n");
        fflush($socket);

        $this->info(">> Verwende Nickname: $nickname");
        $this->info(">> Verwende Token: " . substr($token, 0, 15) . '...');

        // Rechte anfordern
        fwrite($socket, "CAP REQ :twitch.tv/tags twitch.tv/commands twitch.tv/membership\r\n");
        fflush($socket);

        // Channel ohne '#' für JOIN
        $joinChannel = ltrim($channel, '#');
        $ircChannel = "#$joinChannel";
        fwrite($socket, "JOIN $ircChannel\r\n");
        fflush($socket);

        echo ">>> JOIN $ircChannel gesendet – warte auf JE mindestens einen '353' oder '366'.\n";

        echo "Bot gestartet. Lausche auf $ircChannel ...\n";

        // Direkter Testversuch nach kurzer Pause
        sleep(2);
        echo ">>> Direkttest: Sende Testnachricht\n";
        fwrite($socket, "PRIVMSG $ircChannel :Testnachricht: bin ich drin?\r\n");
        fflush($socket);

        $startNachrichtGesendet = false;

        while (!feof($socket)) {
            $data = fgets($socket, 512);

            if (!$data) {
                continue;
            }

            $data = trim($data);
            echo "<<< RAW: $data\n";

            // Verbindung am Leben halten
            if (strpos($data, 'PING :tmi.twitch.tv') !== false) {
                fwrite($socket, "PONG :tmi.twitch.tv\r\n");
                fflush($socket);
                echo ">>> PONG gesendet.\n";
                continue;
            }

            // Nach erfolgreichem Join Startnachricht senden
            if (!$startNachrichtGesendet && preg_match('/^:tmi\.twitch\.tv 366 /', $data)) {
                fwrite($socket, "PRIVMSG $ircChannel :Bot ist online!\r\n");
                fflush($socket);
                echo ">>> Startnachricht gesendet.\n";
                $startNachrichtGesendet = true;
                continue;
            }

            // Chatnachrichten parsen und prüfen
            if (preg_match('/:([^!]+)!.* PRIVMSG #[^ ]+ :(.+)/i', $data, $matches)) {
                $username = $matches[1] ?? 'user';
                $message = trim($matches[2]);

                echo "Nachricht von $username: $message\n";

                // Suche DB-Command case-insensitive
                $command = TwitchChatCommand::whereRaw('LOWER(command) = ?', [strtolower($message)])->first();

                if ($command) {
                    echo "DB-Command gefunden: " . $command->command . "\n";
                    $responseText = str_replace('{user}', $username, $command->response);
                    $response = "PRIVMSG $ircChannel :$responseText\r\n";
                    fwrite($socket, $response);
                    fflush($socket);
                    echo "Antwort gesendet: $responseText\n";
                } else {
                    echo "Kein DB-Command für Nachricht: $message\n";

                    // Fallback !hello
                    if (strcasecmp($message, '!hello') === 0) {
                        $response = "PRIVMSG $ircChannel :Hallo Welt, $username!\r\n";
                        fwrite($socket, $response);
                        fflush($socket);
                        echo "Antwort gesendet an $username\n";
                    }
                }
            }
        }

        fclose($socket);
        return 0;
    }
}
