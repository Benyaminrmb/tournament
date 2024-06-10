<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @persist('header')
        <livewire:app.header />
    @endpersist
    <div class="w-full flex flex-wrap justify-center">
        <div class="w-full container">

            {{ $slot }}
        </div>
    </div>
</body>

</html>
