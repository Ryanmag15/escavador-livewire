<div>
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <h1>Clientes</h1>
        <a href="{{ route('client.create') }}" style="margin-left: auto;">Criar Novo Cliente</a>
    </div>
    <div>
        <input type="text" wire:model.live="search" placeholder="Pesquisar cliente"
            style="margin-top: 10px; padding: 5px; width: 200px;">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        @can('view', $client)
                            <a href="{{ route('client.show', $client->id) }}">Ver</a>
                        @endcan
                        <a href="{{ route('client.edit', $client->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $clients->links() }}
</div>