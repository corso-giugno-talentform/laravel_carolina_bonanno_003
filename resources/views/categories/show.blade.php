<x-layout>
    Categoria: {{ $category->name }} <br>
    Libri scritti: <br>
    {{-- 
    @foreach ($author->books as $book)
        <ul class="m-3">
            <li>{{ $book->name }}</li>
        </ul>
    @endforeach --}}
</x-layout>
