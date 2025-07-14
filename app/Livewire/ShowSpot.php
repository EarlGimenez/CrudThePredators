<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Spots;

class ShowSpot extends Component
{
    public $spot;
    
    public function mount($id)
    {
        $this->spot = Spots::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show-spot');
    }
}
