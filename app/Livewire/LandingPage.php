<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Spots;

class LandingPage extends Component
{
    public $search = '';
    public $searchType = 'name';
    
    public function search()
    {
        if (empty($this->search)) {
            return redirect()->route('spots.list');
        }
        
        return redirect()->route('spots.list', [
            'search' => $this->search,
            'type' => $this->searchType
        ]);
    }

    public function render()
    {
        return view('livewire.landing-page')
            ->layout('components.layouts.app', ['title' => 'Tourism App - Discover Amazing Destinations']);
    }
}
