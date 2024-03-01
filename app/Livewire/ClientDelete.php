<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use App\Models\Client;
use Livewire\Component;

class ClientDelete extends Component
{
    #[Locked]
    public $id;

    #[Locked]
    public $nom;

    public $modalClientDelete = false;

    #[On('dispatch-client-table-delete')]
    public function set_customer($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;

        $this->modalClientDelete = true;
    }

    public function del()
    {
        $del = Client::destroy($this->id);

        ($del)
        ? $this->dispatch('notify', title: 'success', message: 'Client bien supprime')
        : $this->dispatch('notify', title: 'failed', message: 'Suppression non reussie');

        $this->modalClientDelete = false;

        $this->dispatch('dispatch-client-delete-del')->to(ClientTable::class);
    }

    public function render()
    {
        return view('livewire.client-delete');
    }
}
