<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="neratovice, restaurace, cylindr">
    <meta name="description" content="V naší restauraci pro Vás vaříme podle tradičních českých receptů. Připravujeme ale i speciality světových kuchyní a organizujeme pro Vás tématicky zaměřené akce na víkend. Denně je pro Vás připraveno cenově polední menu. Nabízíme i ubytování téměř v centru Neratovic v blízkosti sportovních areálů.">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @wireUiScripts
    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>


</head>
<body class="font-sans antialiased">

    <x-notifications z-index="z-50"/>

    <div class="min-h-screen bg-gray-600">
        @include('layouts.topbar')
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')

    </div>

    @livewireScripts
</body>
</html>
