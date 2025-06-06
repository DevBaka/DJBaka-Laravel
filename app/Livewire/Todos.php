<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public function render()
    {
        return view('livewire.todos');
    }
    public $todo = '';
    public $txtDebugText = 'Debug Text ändern';
    public $todos = [];

    //Lifecycle Hooks

    //Mount wird direkt ausgeführt und interuppted alles andere aus der page
    public function mount(){
        //Der code wird durch den Lifecycle Hook mount() direkt als erstes ausgeführt, bevor alles andere geladen wird. Das könnte genutzt werden um Daten aus der Datenbank zu laden.
        $this->todos = [
        'Müll rausbringen',
        'Do dishes',
        ];
        $this->todo = "Weiteren Punkt zur Todo hinzufügen";
    }

    // Updated wird jedesmals ausgeführt, sobald etwas geupdated wird.
    public function updated($property, $value){
        $this->$property = strtoupper($value);
    }

    //Hiermit wird die funktion aufgerufen, sobald die variable todo geupdated wurde.
    public function updatedTodo(){
        //dd('Todo liste wurde geupdatet!');
    }

    public function add(){
        $this->todos[] = $this->todo;
        //$this->todo = "";
        //this is better:
        $this->reset('todo');
    }

    public function cmdDebugText(){
        dd($this->txtDebugText);
    }
}
