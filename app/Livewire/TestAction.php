<?php

namespace App\Livewire;

use Livewire\Component;

class TestAction extends Component
{
    public $count = 0 ;
    public function increment(){
        return $this->count++;
        // dd($param);
    }
    public function decrement($param){
        // return $this->count--;
        dd($param);
    }
    public function render()
    {
        return view('livewire.test-action');
    }
}
