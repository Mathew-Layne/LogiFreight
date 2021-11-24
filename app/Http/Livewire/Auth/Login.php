<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    public $email, $password;

    public function updatedEmail()
    {
        $this->validate([
            'email' => 'email'
        ]);
    }

    public function updatedPassword()
    {
        $this->validate([
            'password' => 'min:8'
        ]);
    }

    public function login()
    {

        $credentials = $this->validate([
            'email' => 'email|required',
            'password' => 'required|min:8',
        ]);

        if (!auth()->attempt($credentials)) {

            $this->addError('email', trans('auth.failed'));
            return;
        }
        return redirect()->intended('/dashboard');
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
