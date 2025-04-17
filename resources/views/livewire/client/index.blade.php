<div>
    <h1>Clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>
                        @can('view', $client)
                            <a href="{{ route('client.show', $client->id) }}">Ver</a>
                        @endcan
                        <a href="{{ route('client.show', $client->id) }}">Ver</a>
                        <a href="{{ route('client.edit', $client->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
