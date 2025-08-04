<x-layout>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-5">
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco autori inseriti</h3>
                <form class="d-flex" role="search" action="#" method="POST">
                    <input class="form-control me-2" name="search" type="search" placeholder="Cerca Autore"
                        aria-label="Search">
                </form>
                <a class="btn btn btn-success me-md-2" href="{{ route('authors.create') }}">Aggiungi nuovo Autore</a>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <th scope="row">{{ $author->id }}</th>
                            <td>{{ $author->firstname }}</td>
                            <td>{{ $author->lastname }}</td>
                            <td>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                    <a href="{{ route('authors.show', ['author' => $author]) }}"
                                        class="btn btn-primary me-md-2">
                                        Visualizza
                                    </a>
                                    <a href="{{ route('authors.edit', ['author' => $author]) }}"
                                        class="btn btn-warning me-md-2">
                                        Modifica
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger me-md-2" data-bs-toggle="modal"
                                        data-bs-target="#book-{{ $author->id }}">Elimina</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="book-{{ $author->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="book-{{ $author->id }}">
                                                        Sei sicuro di
                                                        voler eliminare l'autore "{{ $author->firstname }}
                                                        {{ $author->lastname }}"?
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
                                                    <form
                                                        action="{{ route('authors.destroy', ['author' => $author]) }}"
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
    </div>
</x-layout>
