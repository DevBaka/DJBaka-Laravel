<!-- resources/views/commands/index.blade.php -->
<h1>Befehle</h1>
<a href="{{ route('commands.create') }}">Neuen Befehl erstellen</a>
<ul>
@foreach($commands as $cmd)
    <li>{{ $cmd->command }} → {{ $cmd->response }}
        <form method="POST" action="{{ route('commands.destroy', $cmd->id) }}">
            @csrf @method('DELETE')
            <button type="submit">Löschen</button>
        </form>
    </li>
@endforeach
</ul>
