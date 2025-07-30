<div class="container my-5 mx-auto">

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST" class="m-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo del libro</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Titolo" aria-label="Name" name="name" value={{ old('name') }}>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno di pubblicazione</label>
            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year"
                placeholder="Anno" aria-label="Year" name="year" value={{ old('year') }}>
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Numero di pagine</label>
            <input type="text" class="form-control @error('pages') is-invalid @enderror" id="pages"
                placeholder="Numero di pagine" name="pages" value={{ old('pages') }}>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">URL cover</label>
            <input type="text" class="form-control @error('cover') is-invalid @enderror" id="cover"
                placeholder="URL" name="cover" value={{ old('cover') }}>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salva</button>
    </form>
</div>
