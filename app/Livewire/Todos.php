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
    public $todos = [
        'Müll rausbringen',
        'Do dishes',
    ];

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
