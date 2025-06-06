<div>
    Count: {{  $count }}
    <br>
    <button wire:click="increment">Increas with click +</button><br>
    <button wire:click="increment(10)"> Increas + 10 with click </button>
    <button wire:click.throttle.1000ms="increment">Increas with click +(erlaubt nur 1klick pro sekunde)</button><br>
    <button wire:mouseenter="increment">Increas with hover +</button>
    <form wire:submit.prevent="increment">
        <button wire:submit="increment">Increas with click with submit a form +</button>
        <button type="submit"> Increase with click + </button>
    </form>
    <br>
    <p>wegen dem button hier wird jeder click auf einen anderen button +2 gerechnet, da dieser button clicks auf der gesamten seite registriert:</p>
    <!--button wire:click.window="increment">Increas with click on the page auch außerhalb vom button +</button--><br>
    
</div>
