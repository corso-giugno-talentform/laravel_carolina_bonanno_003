<x-layout>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-5">
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco libri inseriti</h3>
                <form class="d-flex" role="search" action="{{ route('books.index') }}" method="GET">

                    <div class="input-group">
                        <input name="search" type="search" class="form-control" placeholder="Cerca Libro"
                            aria-label="Cerca Libro">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cerca</button>
                    </div>

                </form>
                <a class="btn btn btn-success me-md-2" href="{{ route('books.create') }}">Aggiungi nuovo libro</a>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Copertina</th>
                        <th scope="col">Titolo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>
                                <img class="card-img-top" style="width:3rem"
                                    src="{{ $book->cover ? Storage::url($book->cover) : '/images/default-book.png' }}"
                                    alt="..." />
                            </td>
                            <td>{{ $book->name }}</td>
                            <td>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                    <a href="{{ route('books.show', ['book' => $book]) }}"
                                        class="btn btn-primary me-md-2">
                                        Visualizza
                                    </a>
                                    <a href="{{ route('books.edit', ['book' => $book]) }}"
                                        class="btn btn-warning me-md-2">
                                        Modifica
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger me-md-2" data-bs-toggle="modal"
                                        data-bs-target="#book-{{ $book->id }}">Elimina</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="book-{{ $book->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="${this.id}"">
                                                        Sei sicuro di
                                                        voler eliminare il libro "{{ $book->name }}"?
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Attenzione: L'operazione non é reversibile.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Annulla</button>
                                                    <form action="{{ route('books.destroy', ['book' => $book]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Pagination: {{ $books->links() }} <!-- Posso pastare view $books->links('viewname') --> --}}
    </div>
</x-layout>
