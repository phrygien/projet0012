<div>
    <x-dialog-modal wire:model.live="modalClientEdit" submit="edit">
        <x-slot name="title">
            Modification client
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">

                <!-- Name -->
                <div class="col-span-12">
                    <x-label for="form.nom" value="Nom du client" />
                    <x-input wire:model="form.nom" id="form.nom" type="text" class="mt-1 w-full" require autocomplete="form.nom" />
                    <x-input-error for="form.nom" class="mt-1" />
                </div>

            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalClientEdit', false)" wire:loading.attr="disabled">
                Annuler
            </x-secondary-button>

            <x-button class="ml-3" wire:loading.attr="disabled">
                Modifier
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>