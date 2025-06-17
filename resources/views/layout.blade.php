<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
        <title>{{ config('app.name') }}</title>        
        <script src="https://kit.fontawesome.com/5dfbc71075.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <header>
            @include('partials.nav')
        </header>
        @yield('content')
        @livewireScripts
    </body>
</html>