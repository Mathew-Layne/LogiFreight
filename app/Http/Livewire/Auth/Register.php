<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $registered = true;

    public function updatedEmail()
    {
        $this->validate([
            'email' => 'unique:users|email',
        ]);
    }

    public function updatedName()
    {

        $this->validate([
            'name' => 'string',
        ]);
    }

    public function updatedPassword()
    {

        $this->validate([
            'password' => 'min:8|confirmed',
        ]);
    }

    public function register()
    {

        $credentials = $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:passwordConfirmation',

        ]);

        User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);

        $this->registered = true;
        // return redirect('/');
    }

    
    public function render()
    {
        return view('livewire.auth.register');
    }
}
