<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $first_name, $last_name, $email, $password, $passwordConfirmation, $city, $address, $phone, $parish, $trn;
    public $registered = false;

    public function updatedEmail()
    {
        $this->validate([
            'email' => 'unique:users|email',
        ]);
    }

    public function updatedName()
    {

        $this->validate([
            'first_name' => 'string',
            'last_name' => 'string',
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:passwordConfirmation',
            'trn' => 'required|unique:users,trn',
            'address' => 'required|string',
            'city' => 'required|string',
            'parish' =>'required',
            'phone' => 'required',

        ]);

        User::create([
            'first_nm' => $credentials['first_name'],
            'last_nm' =>$credentials['last_name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'trn'=> $credentials['trn'],
            'address' =>$credentials['address'],
            'city' => $credentials['city'],
            'parish' => $credentials['parish'],
            'phone' => $credentials['phone'],
            'mailbox' => 'LF'.random_int(10000, 99999),
        ]);

        $this->registered = true;
        return redirect()->route('dashboard');
    }

    
    public function render()
    {
        return view('livewire.auth.register');
    }
}
