<?php

namespace App\Livewire;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Event extends Component
{
    protected $listeners = ['rsvpUpdated' => 'refreshList'];

    public function mount()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    }
    public function render()
    {
        Paginator::useBootstrap();

        return view('livewire.event', [
            'events' => Event::withCount('rsvps')->where('date', '>=', now())->orderBy('date')->paginate()
        ]);
    }
}
