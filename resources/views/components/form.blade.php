<div class="container my-5 mx-auto">

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    <x-errors-all></x-errors-all>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="m-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo del libro</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Titolo" aria-label="Name" name="name" value={{ old('name') }}>
        </div>
        <div class="mb-3">
            <label for="inputAuthor" class="form-label">Autore</label>
            <select class="form-select" name="author_id" id="inputAuthor" value={{ old('author_id') }}>
                <!-- sqlstate hy000 general error 1366 risolto assegnando value="null"-->
                <option selected value>Seleziona Autore</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->firstname }} {{ $author->lastname }}</option>
                @endforeach
            </select>
        </div>

        <!-- checkboxes -->

        <div class="mb-3">
            <label for="inputCategory" class="form-label">Categoria:</label>
            @foreach ($categories as $category)
                <div class="form-check">
                    <input name="categories[]" class="form-check-input" type="checkbox" value="{{ $category->id }}"
                        id="flexCheckDefault-{{ $category->id }}">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach
        </div>

        {{-- <div class="mb-3">
            <label for="categories[]" class="form-label">Seleziona Categoria:<br></label>
            <select id="categories[]" class="selectpicker" multiple data-live-search="true" name="categories[]">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">ciao</option>
                @endforeach
            </select>
        </div> --}}

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
            <label for="formFile" class="form-label">Carica un'immagine di copertina</label>
            <input class="form-control @error('cover') is-invalid @enderror" type="file" id="formFile"
                name="cover">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salva</button>
    </form>
</div>
