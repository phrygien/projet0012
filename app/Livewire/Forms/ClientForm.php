<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClientForm extends Form
{
    public ?Client $client;

    #[Rule('required|string')]
    public $nom;

    // #[Rule('required', as:'Numero client')]
    // public $num_client;

    public function setClient(Client $client)
    {
        $this->client = $client;

        //$this->num_client = $client->num_client;
        $this->nom = $client->nom;
    }

    // enregistrer client
    public function store()
    {
        // Générer le numéro client alphanumérique
        $num_client = $this->generateRandomString(5);
    
        // Créer le client dans la base de données
        Client::create([
            'num_client' => $num_client,
            'nom' => $this->nom,
        ]);
        $this->reset();
    }

    public function update()
    {
        $this->client->update();
    }

    function generateRandomString($length = 5) {
        $bytes = random_bytes(ceil($length / 2));
        return substr(bin2hex($bytes), 0, $length);
    }
}
