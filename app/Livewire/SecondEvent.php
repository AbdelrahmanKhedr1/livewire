<?php

namespace App\Livewire;

use Livewire\Component;

class SecondEvent extends Component
{
    protected  $listeners = ['fire' => 'handleMessage'];

    public function  handleMessage()
    {
        dd('handling message: second event');
    }
    public function render()
    {
        return view('livewire.second-event');
    }
}
