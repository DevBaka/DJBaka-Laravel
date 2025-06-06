<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
//use LiveWire\Attributes\Title;


//#[Title('Counter')]
class Counter extends Component
{

    public $count = 1;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment($by = 1){
        $this->count = $this->count + $by;

    }
}
