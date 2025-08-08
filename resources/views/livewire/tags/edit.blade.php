<div class="container my-5 mx-auto">

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    <x-errors-all />

    <form class="m-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nome Tag</label>
            <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Nome">
        </div>
        <button type="button" wire:click="update" class="btn btn-primary mt-3">Aggiorna</button>
    </form>
</div>
