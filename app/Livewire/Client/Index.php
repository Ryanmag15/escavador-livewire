<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.client.index', [
            'clients' => Client::paginate(10),
        ]);
    }
}
