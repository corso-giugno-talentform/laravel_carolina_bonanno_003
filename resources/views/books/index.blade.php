<x-layout>
    <h2>I Libri Inseriti</h2>
    <div class="m-5">
        <ul>
            @foreach ($books as $book)
                <li class="my-3"><img class="img-preview pe-2"
                        src="{{ $book->cover ? Storage::url($book->cover) : '/images/default-book.png' }}"
                        alt="{{ $book->name }}">
                    {{ $book->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('books.create') }}" class="mt-3 btn btn-primary">Aggiungi libro</a>
    </div>
</x-layout>
