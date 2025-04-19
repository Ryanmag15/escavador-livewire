<div>
    <h1>Criar Cliente</h1>

    <form wire:submit.prevent="save">
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" wire:model="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email">
        </div>

        <button type="submit">Salvar</button>
    </form>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>