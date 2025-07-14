<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Spots;
use Livewire\WithPagination;

class ListSpots extends Component
{
    use WithPagination;
    
    public $search = '';
    public $searchType = 'name';
    
    protected $queryString = ['search', 'searchType' => ['as' => 'type']];
    
    public function mount()
    {
        $this->search = request('search', '');
        $this->searchType = request('type', 'name');
    }
    
    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function updatedSearchType()
    {
        $this->resetPage();
    }
    
    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Spots::query();
        
        if (!empty($this->search)) {
            if ($this->searchType === 'country') {
                $query->where('country', 'like', '%' . $this->search . '%');
            } else {
                $query->where('name', 'like', '%' . $this->search . '%');
            }
        }
        
        $spots = $query->orderBy('rating', 'desc')->paginate(12);
        
        return view('livewire.list-spots', [
            'spots' => $spots
        ]);
    }
}
