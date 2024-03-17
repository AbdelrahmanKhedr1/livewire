<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class FilesComponent extends Component
{

    use WithFileUploads;
    #[Validate('required|image|max:1024')] // 1MB Max
    public $photo ;

    public function submit(){
        $this->validate([
            'photo' => 'required|image|max:1024'
        ]);
        $this->photo->store(path: 'photos');
    }
    public function render()
    {
        return view('livewire.files-component');
    }
}
