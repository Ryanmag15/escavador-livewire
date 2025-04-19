<div>
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <h1>Processos</h1>
        <a href="{{ route('process.create') }}" style="margin-left: auto;">Criar Novo Processo</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>CNJ</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($processes as $process)
                <tr>
                    <td>{{ $process->id }}</td>
                    <td>{{ $process->number_cnj }}</td>
                    <td>
                        <a href="{{ route('process.show', $process->id) }}">Ver</a>
                        <a href="{{ route('process.edit', $process->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
            {{ $processes->links() }}
        </tbody>
    </table>
</div>