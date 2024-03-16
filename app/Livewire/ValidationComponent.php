<?php

namespace App\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{

    public  $password, $email, $remember;

    // protected $rules = [ 'email' => 'required|email', 'password' =>'required|min:5', 'remember' => 'nullable'];
    // او
    public function rules(){
        return [
            'email' => 'required|email',
            'password' => 'required|min:5',
            'remember' => 'nullable'
        ];
    }
    public function messages(){
        return [
            'email' => 'my messsages',
            'password' => 'cvcvcvcvcvcvc',

        ];
    }




    // // دي كدا هتعملي validation علي كله مره واحده
    //     public function updated(){
    //         $this->validate([
    //             'email' => 'required|email',
    //             'password' => 'required|min:5',
    //             'remember' => 'nullable'
    //         ]);
    //     }

    // // دي كدا علي لايميل بس
    // public function updatedEmail(){
    //     $this->validate([
    //         'email' => 'required|email',
    //     ]);
    // }
    // // دي كدا علي لايميل بس
    // public function updatedPassword(){
    //     $this->validateOnly('password');
    // }

    //  هيعمل validation مع ال submit
    public function submit(){

        $this->validate();
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}
