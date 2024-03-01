<?php

namespace App\Livewire;

use App\Livewire\Forms\ClientForm;
use Livewire\Component;

class ClientCreate extends Component
{
    public ClientForm $form;

    public $modalClientCreate = false;

    public function save()
    {
        $this->validate();
        $client = $this->form->store();

        is_null($client)
        ? $this->dispatch('notify', title: 'success', message: 'Client bien enregistre!')
        : $this->dispatch('notify', title: 'echec', message: 'Client non enregistre!');
    }

    public function render()
    {
        return view('livewire.client-create');
    }
}
