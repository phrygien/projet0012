<?php

namespace App\Livewire;

use App\Livewire\Forms\ClientForm;
use App\Models\Client;
use Livewire\Attributes\On;
use Livewire\Component;

class ClientEdit extends Component
{
    public ClientForm $form;

    public $modalClientEdit = false;

    #[On('dispatch-client-table-edit')]
    public function set_client(Client $id)
    {
        $this->form->setClient($id);
        $this->modalClientEdit = true;
    }

    public function edit()
    {
        $this->validate();
        $update = $this->form->update();

        is_null($update)
        ? $this->dispatch('notify', title: 'success', message: 'Modification client avec succees')
        : $this->dispatch('notify', title: 'failed', message: 'Modification client non reussie');

        $this->dispatch('dispatch-client-create-edit')->to(ClientTable::class);
    }

    public function render()
    {
        return view('livewire.client-edit');
    }
}
