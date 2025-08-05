<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $dependencies ?? '' }}
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <x-nav></x-nav>
    </header>
    <main class="container mx-5 my-2">
        {{ $slot }}
    </main>
    {{ $script ?? '' }}
</body>

</html>
