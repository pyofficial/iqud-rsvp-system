<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function authenticate()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $this->redirect(route('dashboard'));
        } else {
            $this->addError('email', 'These credentials do not match our records.');
        }
    }

    public function render()
    {
        Log::info('Attempting to render Login component');
        return view('livewire.login');
    }
}
