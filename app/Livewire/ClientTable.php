<?php

namespace App\Livewire;

use App\Livewire\Forms\ClientForm;
use App\Models\Client;
use App\Traits\WithSorting;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ClientTable extends Component
{
    use WithPagination;
    use WithSorting;
    public ClientForm $form;

    public
        $paginate = 5,
        $sortBy = 'clients.id',
        $sortDirection = 'desc';

    #[On('dispatch-client-create-save')]
    #[On('dispatch-client-create-edit')]
    #[On('dispatch-client-delete-del')]
    public function render()
    {
        $clients = Client::all();
        return view('livewire.client-table', [
                'clients' => Client::where('id', 'like', '%'.$this->form->id.'%')
                    ->where('nom', 'like', '%'.$this->form->nom.'%')
                    //->where('num_client', 'like', '%'.$this->form->num_client.'%')
                    ->orderBy($this->sortBy, $this->sortDirection)
                    ->paginate($this->paginate),
        ]);
    }

    public function confirmDelete($get_id)
    {
        try {

            Client::destroy($get_id);

        } catch (\Exception $e) {

            $this->dispatch('sweet-alert', icon: 'error', title: 'Client bien supprimer');
            
        }
    }
}
