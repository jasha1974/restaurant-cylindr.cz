<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public $loginModal;
    public $button = 'Open';
    public $input = 'Lorem Ipsum ....';

    public function save()
    {
        $this->button = $this->input;
        $this->loginModal = false;
    }

    public function render()
    {
        return view('livewire.login-component');
    }
}
