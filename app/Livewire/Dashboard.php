<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Dashboard extends Component
{
    protected $middleware = ['auth'];

    public function render()
    {
        // dd(auth()->user()->events()->get()->toArray());
        $events = auth()->user()->events()->get();
        // dd($events);
        return view('livewire.dashboard', ['events' => $events]);
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
