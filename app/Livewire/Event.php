<?php

namespace App\Livewire;

use App\Models\Event as ModelsEvent;
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
            'events' => ModelsEvent::withCount('rsvps')->where('date', '>=', now())->orderBy('date')->paginate(10)
        ]);
    }
}
