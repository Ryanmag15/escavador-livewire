<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;

class Show extends Component
{
    
    public Client $client;

    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.client.show');
    }
}
