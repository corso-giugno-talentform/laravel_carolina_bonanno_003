<x-layout>
    <h2>Modifca Categoria</h2>
    <!-- form -->
    <div class="container my-5 mx-auto">

        @if (session('success'))
            <x-alert color="alert-success">{{ session('success') }}</x-alert>
        @endif

        <x-errors-all></x-errors-all>

        <form action="{{ route('categories.update', ['category' => $category]) }}" method="POST" class="m-5">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome Categoria</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Nome" name="name" value={{ $category->name }}>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salva</button>
        </form>
    </div>
</x-layout>
