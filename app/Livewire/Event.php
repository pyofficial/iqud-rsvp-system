<?php

namespace App\Livewire;

use App\Models\Event as ModelsEvent;
use App\Models\EventRsvp;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Event extends Component
{
    protected $listeners = [
        'rsvpUpdated' => 'refreshList',
        'addEvent' => 'atach',
        'leaveEvent' => 'detch',
    ];

    // public function mount()
    // {
    //     if (!Auth::check()) {
    //         return redirect()->route('login');
    //     }
    // }
    public function render()
    {
        Paginator::useBootstrap();

        return view('livewire.event', [
            'events' => ModelsEvent::withCount('users')->with(['users'])->where('date', '>=', now())->orderBy('date')->paginate(10)
        ]);
    }

    public function detach($id)
    {
        $data = auth()->user()->events()->detach($id);
        return redirect()->back()->withInput()->withSuccess('Success');
    }

    public function attach($id)
    {
        $data = auth()->user()->events()->attach($id);
        return redirect()->back()->withInput()->withSuccess('Success');
    }
}
