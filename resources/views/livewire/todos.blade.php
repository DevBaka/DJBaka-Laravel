<div>
    <p> so kann man außerdem mit dd(); debug fenster erstellen zum testen: </p><input type="text" wire:model="txtDebugText"><button wire:click="cmdDebugText" type="button">Debug fenster erstellen</button>
    
    <br>

    <h2>Todo liste:</h2>
    <form wire:submit="add">
        <input type="text" wire:model="todo">
        <span>Current todo: {{ $todo }} </span>
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>            
        @endforeach
    </ul>
</div>