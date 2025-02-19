<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Dashboard extends Component
{
    protected $middleware = ['auth'];

    public function render()
    {
        return view('livewire.dashboard');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        auth()->guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
