<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TwitchChatCommand;
use Illuminate\Http\Request;

class TwitchChatCommandController extends Controller
{
    public function index()
    {
        $commands = TwitchChatCommand::all();
        return view('backend.pages.twitch.chatbot.twitch-commands', compact('commands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'command' => 'required|string|max:255',
            'response' => 'required|string',
        ]);

        TwitchChatCommand::create($request->only('command', 'response'));
        return redirect()->route('chatbot.commands.index')->with('success', 'Befehl hinzugefügt!');
    }

    public function update(Request $request, TwitchChatCommand $command)
    {
        $request->validate([
            'command' => 'required|string|max:255',
            'response' => 'required|string',
        ]);

        $command->update($request->only('command', 'response'));
        return redirect()->route('chatbot.commands.index')->with('success', 'Befehl aktualisiert!');
    }

    public function destroy(TwitchChatCommand $command)
    {
        $command->delete();
        return redirect()->route('chatbot.commands.index')->with('success', 'Befehl gelöscht!');
    }
}
