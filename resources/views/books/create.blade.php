<x-layout>
    {{-- <x-slot name="dependencies">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    </x-slot> --}}
    <h2>I Libri Inseriti</h2>
    <x-form :authors="$authors" :categories="$categories"></x-form>
    {{-- <x-slot name="script">
        <script type="text/javascript">
            $(document).ready(function() {
                $('select').selectpicker();
            });
        </script>
    </x-slot> --}}
</x-layout>
