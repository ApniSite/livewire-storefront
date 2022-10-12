<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @livewireStyles
</head>

<body class="antialiased text-gray-900">
    @livewire('store', ['name' => $name ?? config('app.name')])
    <main>
        {{ $slot ?? '' }}
    </main>

    @livewireScripts
</body>

</html>