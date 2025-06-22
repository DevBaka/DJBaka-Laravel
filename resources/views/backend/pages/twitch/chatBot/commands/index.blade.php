@extends('backend.dashboard')
@section('backend')
    <div class="container">
        <h1>Chatbot-Befehle verwalten</h1>

        {{-- Neueintrag --}}
        <h2>Neuen Befehl hinzufügen</h2>
        <form method="POST" action="{{ route('chatbot.commands.store') }}" class="mb-5">
            @csrf
            <div class="mb-3">
                <input type="text" name="command" class="form-control" placeholder="Befehl (z. B. !hello)" required>
            </div>
            <div class="mb-3">
                <textarea name="response" class="form-control" placeholder="Antwort..." required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Hinzufügen</button>
        </form>

        {{-- Liste aller Befehle --}}
        <h2>Bestehende Befehle</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Befehl</th>
                    <th>Antwort</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($commands as $command)
                    <tr>
                        <form method="POST" action="{{ route('chatbot.commands.update', $command) }}">
                            @csrf
                            @method('PUT')
                            <td>
                                <input type="text" name="command" class="form-control" value="{{ $command->command }}" required>
                            </td>
                            <td>
                                <input type="text" name="response" class="form-control" value="{{ $command->response }}" required>
                            </td>
                            <td class="d-flex gap-2">
                                <button type="submit" class="btn btn-sm btn-warning">Speichern</button>
                        </form>
                        <form method="POST" action="{{ route('chatbot.commands.destroy', $command) }}">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Löschen</button>
                        </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
