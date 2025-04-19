<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.client.index', [
            'clients' => Client::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orderBy('name')
                ->paginate(10),
        ]);
    }
}
