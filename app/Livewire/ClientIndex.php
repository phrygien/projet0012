<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ClientIndex extends Component
{
    // pour afficher page client
    public function render(): View
    {
        return view('livewire.client-index');
    }
}
