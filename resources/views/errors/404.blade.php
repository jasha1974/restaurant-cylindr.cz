<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <div class="text-white min-h-screen flex justify-center bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500">
        <div class="container mx-auto p-4 flex flex-wrap items-center">
            <div class="w-full md:w-5/12 text-center p-4">
                <img src="{{ URL::asset('images/404.png') }}" alt="Not Found" />
            </div>
            <div class="w-full md:w-7/12 text-center md:text-left p-4">
                <div class="text-6xl font-medium">404</div>
                <div class="text-xl md:text-3xl font-medium mb-4">
                    Oops. Stránku sem nenašel.
                </div>
                <div class="text-lg mb-8">
                    Máte špatnou adresu nebo byla stránka přesunuta.
                </div>
                <a href="/" class="border border-white rounded p-4">Home page</a>
            </div>
        </div>
    </div>


@livewireScripts
</body>
</html>
