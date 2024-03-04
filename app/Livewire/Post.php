<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $names = ['Abdelrahman','emad','khedr'];
    public $name;
    public function getFullNameProperty(){
        return implode(' ', $this->names);
    }

    public function render()
    {
        return view('livewire.post');
    }
}
