<div>
    <table class="w-full mt-8">
        <thead>
            <th class="p-2 whitespace-nowrap border border-spacing-1">Numero Client</th>
            <th class="p-2 whitespace-nowrap border border-spacing-1">Nom du client</th>
        </thead>
        <tbody>
            @foreach ($clients as $client )
                <tr>
                    <td class="p-2 border border-spacing-1">{{ $client->num_client }}</td>
                    <td class="p-2 border border-spacing-1">{{ $client->nom }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
