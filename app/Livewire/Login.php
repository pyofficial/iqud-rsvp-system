<?php

namespace App\Livewire;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $password;

    public function authenticate()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        if (Auth::attempt($credentials)) {
            session()->flash('message', 'You have successfully logged in!');
            return $this->redirectRoute('dashboard', navigate: true);
        }

        session()->flash('error', 'Invalid credentials!');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
