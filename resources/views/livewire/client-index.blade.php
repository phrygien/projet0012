<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-button @click="$dispatch('notify', { title: 'sending notification' })">Toastify</x-button>
                <div
                    x-data="{open: false}"
                    x-show="open"
                    @notify.window="Toastify({
                        text: 'This is a toast',
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: 'top',
                        position: 'left', 
                        stopOnFocus: true,
                        style: {
                            background: 'linear-gradient(to right, #00b09b, #96c93d)',
                        },
                        }).showToast();"
                >

                </div>
            </div>
        </div>
    </div>
</div>
