<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'Nero Works | Find your dream job' }}</title>
</head>

<body>
    <x-header />
    @if (request()->is('/'))
        <x-hero />
        <x-top-banner />
    @endif
    <main class="container mx-auto p-4 mt-4">
        {{ $slot }}
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
