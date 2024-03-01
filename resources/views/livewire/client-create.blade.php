<div>
    <x-button @click="$wire.set('modalClientCreate', true)">Creer client</x-button>

    <x-dialog-modal wire:model.live="modalClientCreate" submit="save">
        <x-slot name="title">
            Formulaire Client
        </x-slot>

        <x-slot name="content">
           Input client
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalClientCreate', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Enregistrer
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
