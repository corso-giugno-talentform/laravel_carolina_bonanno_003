<x-layout>
    <h2>Modifca Autore</h2>
    <!-- form -->
    <div class="container my-5 mx-auto">

        @if (session('success'))
            <x-alert color="alert-success">{{ session('success') }}</x-alert>
        @endif

        <x-errors-all></x-errors-all>

        <form action="{{ route('authors.update', ['author' => $author]) }}" method="POST" class="m-5">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="firstname" class="form-label">Nome</label>
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                    placeholder="Nome" aria-label="Name" name="firstname" value="{{ $author->firstname }}">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                    placeholder="Cognome" aria-label="Last name" name="lastname" value="{{ $author->lastname }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Salva</button>
        </form>
    </div>
</x-layout>
