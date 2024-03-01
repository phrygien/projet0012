<div>
    <x-dialog-modal wire:model.live="modalClientDelete">
        <x-slot name="title">
            Suppression client
        </x-slot>

        <x-slot name="content">
            <p>Vous etes sure de supprimer le client: {{ $id }} Nom client: {{ $nom }}?</p>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalClientDelete', false)" wire:loading.attr="disabled">
                Annuler
            </x-secondary-button>

            <x-danger-button @click="$wire.del()" class="ml-3" wire:loading.attr="disabled">
                Suuprimer
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>