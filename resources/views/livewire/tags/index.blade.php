<div class="container mt-5">
    @if (session('success'))
        <x-alert color="alert-success"> {{ session('success') }}</x-alert>
    @endif
    <div class="align-middle gap-2 d-flex justify-content-between">
        <h3>Elenco Tag inseriti</h3>
        <a class="btn btn btn-success me-md-2" href="{{ route('tags.create') }}">Aggiungi nuovo Tag</a>
    </div>

    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->name }}</td>
                    <td>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('tags.edit', ['tag' => $tag]) }}" class="btn btn-warning me-md-2">
                                Modifica
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger me-md-2" data-bs-toggle="modal"
                                data-bs-target="#tag-{{ $tag->id }}">Elimina</button>

                            <!-- Modal -->
                            <div class="modal fade" id="tag-{{ $tag->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="tag-{{ $tag->id }}">
                                                Sei sicuro di
                                                voler eliminare il tag "{{ $tag->name }}"?
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
                                            <form>

                                                <button type="button" wire:click="delete({{ $tag->id }})"
                                                    class="btn btn-danger">Elimina</button>
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
