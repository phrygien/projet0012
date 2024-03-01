<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <livewire:client-create />
                <livewire:client-table />
                <!-- <x-button @click="$dispatch('notify', { title: 'fail', message: 'data bien inserer' })">Toastify</x-button> -->
        </div>
    </div>
</div>
