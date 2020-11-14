<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ночной чат') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <livewire:styles />
</head>

<body class="font-sans antialiased bg-gray-900">
    <div class="grid grid-cols-3 min-h-screen bg-gray-900">

        @include('layouts.navigation')

        <!-- Page Content -->
        @auth
        @if(Auth::user()->role == 1)
        <livewire:userpanel />
        @else
        <div class="w-full"></div>
        @endif
        @endauth
        @guest
        <div class="w-full"></div>
        @endguest
        <main class="h-screen">
            {{ $slot }}
        </main>
        @auth
        @if(Auth::user()->role == 1)
        <livewire:trashed />
        @else
        <div class="w-full"></div>
        @endif
        @endauth
        @guest
        <div class="w-full"></div>
        @endguest
    </div>
    <livewire:scripts>
</body>

</html>
