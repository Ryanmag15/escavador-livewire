<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    public Client $client;
    public string $name;


    public function mount(Client $client)
    {
        $this->client = $client;
        $this->name = $client->name;
    }

    public function update()
    {
        $this->authorize('update', $this->client);

        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->client->update([
            'name' => $this->name,
        ]);

        return redirect()->route('client.index')
            ->with('message', 'Cliente atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.client.edit');
    }
}
