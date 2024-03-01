<div>
    <x-button @click="$wire.set('modalClientCreate', true)">Creer client</x-button>

    <x-dialog-modal wire:model.live="modalClientCreate" submit="save">
        <x-slot name="title">
            Formulaire Client
        </x-slot>

        <x-slot name="content">
           <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <x-label for="form.nom" value="Nom du client" />
                    <x-input wire:model="form.nom" id="form.nom" type="text" class="mt-1 w-full" require autocomplete="form.nom" />
                    <x-input-error for="form.nom" class="mt-1" />
                </div>
           </div>
        </x-slot>

        <x-slot name="footer">

            <x-button wire:loading.attr="disabled">
                Enregistrer
            </x-button>
            
            <x-danger-button class="ms-3" @click="$wire.set('modalClientCreate', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
