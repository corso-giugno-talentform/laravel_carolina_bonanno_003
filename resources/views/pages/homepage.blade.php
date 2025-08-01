<x-layout>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="my-5 mx-auto text-center">
            <h1>{{ env('APP_NAME') }}</h1>
            <h3 class="mt-2">Il portale di libri più grande d'Italia.</h3>
        </div>
        <section class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
            @foreach ($books as $book)
                <div class="card shadow-sm" style="width: 18rem">
                    <img class="card-img-top img-small object-fit-cover" style="max-height:400px"
                        src="{{ $book->cover ? Storage::url($book->cover) : '/images/default-book.png' }}"
                        alt="{{ $book->name }}">
                    <div class="card-body d-flex flex-column gap-1">
                        <h5>{{ $book->name }}</h5>
                        <p class="card-text">Lorem ipsum</p>
                        <small class="text-body-secondary">Numero di pagine: {{ $book->pages }}</small>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
</x-layout>
