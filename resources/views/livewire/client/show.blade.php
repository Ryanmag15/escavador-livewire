<div>
    <h1>Detalhes do Cliente</h1>

    <p><strong>ID:</strong> {{ $client->id }}</p>
    <p><strong>Nome:</strong> {{ $client->name }}</p>

    <a href="{{ route('client.edit', $client->id) }}">Editar</a>
</div>
