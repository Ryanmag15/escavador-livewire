<?php
namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;

class Create extends Component
{
    public $name;
    public $email;

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:clients,email',
        ]);

        Client::create($validatedData);

        session()->flash('message', 'Cliente criado com sucesso!');
        return redirect()->route('client.index');
    }

    public function render()
    {
        return view('livewire.client.create');
    }
}
