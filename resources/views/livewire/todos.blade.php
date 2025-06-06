<div>
    <p> so kann man außerdem mit dd(); debug fenster erstellen zum testen: </p><input type="text" wire:model="txtDebugText"><button wire:click="cmdDebugText" type="button">Debug fenster erstellen</button>
    
    <br>

    <h2>Todo liste:</h2>
    <form wire:submit="add">
        <p>Jeder input wird direkt übermittelt mit .live: </p>
        <input type="text" wire:model.live="todo"><span>Current todo: {{ $todo }} </span>
        <p>Jeder input wird direkt nach 50ms übermittelt mit .live.debounce.50ms: </p>
        <input type="text" wire:model.live.debounce.200ms="todo"><span>Current todo: {{ $todo }} </span>
        <p>Der Input wird übermittelt nach dem raustabben aus der input box mit: .live.change: </p>
        <input type="text" wire:model.live.change="todo">
        <span>Current todo: {{ $todo }} </span>
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>            
        @endforeach
    </ul>
</div>