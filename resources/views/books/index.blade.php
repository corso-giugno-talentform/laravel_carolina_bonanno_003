<x-layout>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        {{-- @livewire('table') --}}
        <livewire:table />
        {{-- Pagination: {{ $books->links() }} <!-- Posso pastare view $books->links('viewname') --> --}}
    </div>
</x-layout>
