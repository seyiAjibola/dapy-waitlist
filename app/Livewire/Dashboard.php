<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Waitlist;

class Dashboard extends Component
{
    public $waitlist;

    public function mount()
    {
        $this->waitlist = Waitlist::all();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
