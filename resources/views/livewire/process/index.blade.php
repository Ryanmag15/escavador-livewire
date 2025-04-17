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
            @foreach($processes as $process)
                <tr>
                    <td>{{ $process->id }}</td>
                    <td>{{ $process->cnj }}</td>
                    <td>
                        <a href="{{ route('process.show', $process->id) }}">Ver</a>
                        <a href="{{ route('process.edit', $process->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
