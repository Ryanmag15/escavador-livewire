<?php

namespace App\Livewire\Process;

use App\Models\Process;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.process.index', [
            'processes' => Process::paginate(10),
        ]);
    }
}
