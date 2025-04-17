<div>
    <h1>Editar Cliente</h1>

    <form wire:submit.prevent="update">
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" wire:model="name">
        </div>

        <button type="submit">Atualizar</button>
    </form>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
