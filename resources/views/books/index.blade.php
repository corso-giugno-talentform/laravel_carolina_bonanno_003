<x-layout>
    <h2>I Libri Inseriti</h2>
    <div class="m-5">
        <ul>
            @foreach ($books as $book)
                <li>{{ $book->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('books.create') }}" class="mt-3 btn btn-primary">Aggiungi libro</a>
    </div>
</x-layout>
