<?php

namespace App\Livewire;

use Livewire\Component;

class TryHooks extends Component
{

    public $count = 0 ;
// ال mount بتشتغل مره واحده بس
    public function  mount() {
        dump( 'mount function' );
    }
// ال boot  هي اول واحده بتشتغل ايأ كان مكنها
    public function  boot() {
        dump( 'boot function' );
    }

    public function increment(){
        $this->count++;
        dump('Incremented Function');
    }

    public function render()
    {
        dump('Render Function');

        return view('livewire.try-hooks');
    }
}
