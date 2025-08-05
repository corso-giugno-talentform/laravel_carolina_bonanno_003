<x-layout>
    Nome Libro: {{ $book->name }} <br>
    Autore: @if (isset($book->author->firstname))
        {{ $book->author->firstname }} {{ $book->author->lastname }}
    @else
        Sconosciuto
    @endif
    <br>
    Anno di uscita: {{ $book->year }} <br>
    Numero di pagine: {{ $book->pages }}
    <hr>
    Categoria: <br>
    @foreach ($book->categories as $category)
        <ul>
            <li>{{ $category->name }}</li>
        </ul>
    @endforeach
</x-layout>
