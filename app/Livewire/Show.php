<?php

namespace App\Livewire;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            hello from inline component
        </div>
        HTML;
    }
}
