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
</x-layout>
