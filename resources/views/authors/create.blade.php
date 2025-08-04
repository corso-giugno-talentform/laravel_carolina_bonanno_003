<x-layout>
    <h2>Aggiungi Autore</h2>
    <!-- form -->
    <div class="container my-5 mx-auto">

        @if (session('success'))
            <x-alert color="alert-success">{{ session('success') }}</x-alert>
        @endif

        <x-errors-all></x-errors-all>

        <form action="{{ route('authors.store') }}" method="POST" class="m-5">
            @csrf
            <div class="mb-3">
                <label for="firstname" class="form-label">Nome</label>
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                    placeholder="Nome" name="firstname" value={{ old('firstname') }}>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                    placeholder="Cognome" name="lastname" value={{ old('lastname') }}>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Salva</button>
        </form>
    </div>

</x-layout>
