<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    protected $middleware = ['auth'];

    public function render()
    {
        return view('livewire.dashboard');
    }
}
