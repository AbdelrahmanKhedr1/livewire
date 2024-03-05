<?php

namespace App\Livewire;

use Livewire\Component;

class FirstEvent extends Component
{
    // ال fire هنادي بيها في صفحه second-event.blade
    // ال handleMessage اسم ال function
    protected  $listeners = ['fire' => 'handleMessage'];

    public function  handleMessage()
    {
        dd('handling message: first event');
    }

    // // ممكن استعمل هنا ال key بس عشان انادي عليها بنفس اسم ال function
    // protected  $listeners = ['fire'];

    // public function  fire()
    // {
    //     dd('handling message: ');
    // }

    public function render()
    {
        return view('livewire.first-event');
    }
}
