<div>
    <h1>Criar Cliente</h1>

    <form wire:submit.prevent="save">
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" wire:model="name">
        </div>

        <button type="submit">Salvar</button>
    </form>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
