<div class="container my-5 mx-auto">

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    <x-errors-all />

    <form class="m-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nome Tag</label>
            <input wire:model.live.debounce.300ms="name" type="text"
                class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nome">
        </div>
        <button type="button" wire:click="store"class="btn btn-primary mt-3">Salva</button>
    </form>
</div>
