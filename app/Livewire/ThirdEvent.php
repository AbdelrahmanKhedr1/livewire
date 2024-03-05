<?php

namespace App\Livewire;

use Livewire\Component;

class ThirdEvent extends Component
{
    protected  $listeners = ['fire' => 'handleMessage'];

    public function  handleMessage()
    {
        dd('handling message: third event');
    }
    public function render()
    {
        return view('livewire.third-event');
    }
}
