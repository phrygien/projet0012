<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Attributes\On;
use Livewire\Component;

class ClientTable extends Component
{
    #[On('dispatch-client-create-save')]
    public function render()
    {
        $clients = Client::all();
        return view('livewire.client-table', [
            'clients' => $clients
        ]);
    }
}
