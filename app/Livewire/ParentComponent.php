<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{

    public $parentTitle = 'Hello I am  the parent component';
    public $myChild = ['child1', 'child2'];
    public function render()
    {
        return view('livewire.parent-component');
    }
}
