<div>
    <x-select wire:model.live="paginate" class="text-xs mt-8">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </x-select>

    <table class="w-full mt-2">
        <thead>
            <tr>
                <th class="p-2 whitespace-nowrap border border-spacing-1">#</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">Action</th>
                <th @click="$wire.sortField('id')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'id'" /> ID
                </th>
                <th @click="$wire.sortField('num_client')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'num_client'" /> Numero client
                </th>
                <th @click="$wire.sortField('nom')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'nom'" /> Nom client
                </th>
            </tr>
            <tr>
                <td class="p-2 border border-spacing-1"></td>
                <td class="p-2 border border-spacing-1"></td>
                <td class="p-2 border border-spacing-1"><x-input wire:model.live="form.id" type="search" class="w-full text-sm" /></td>
                <td class="p-2 border border-spacing-1"><x-input wire:model.live="form.num_client" type="search" class="w-full text-sm" /></td>
                <td class="p-2 border border-spacing-1"><x-input wire:model.live="form.nom" type="search" class="w-full text-sm" /></td>
            </tr>
        </thead>
        <tbody>
            @isset($clients)
                @foreach($clients as $client)
                    <tr>
                        <td class="p-2 border border-spacing-1 text-center">{{ $loop->iteration }}.</td>
                        <td class="p-2 border border-spacing-1">
                            <x-button @click="$dispatch('dispatch-client-table-edit', { id: '{{ $client->id }}' })" type="button">Modifier</x-button>
                            <x-danger-button
                                @click="$dispatch('confirm-delete', { get_id: {{ $client->id }} })"
                            >Supprimer</x-danger-button>
                        </td>
                        <td class="p-2 border border-spacing-1 text-center">{{ $client->id }}</td>
                        <td class="p-2 border border-spacing-1">{{ $client->num_client }}</td>
                        <td class="p-2 border border-spacing-1">{{ $client->nom }}</td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>

    <div class="mt-3">{{ $clients->onEachSide(1)->links() }}</div>

    <x-confirm-delete />
</div>