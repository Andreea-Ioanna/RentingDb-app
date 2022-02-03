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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="guest_nav">
    <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
    </div>
    @if (Route::has('login'))
        <div>
            @auth
            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="login_nav">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="register_nav">Register</a>
            @endif
            @endauth
        </div>
        @endif
        </div>
        <div class="font-sans text-gray-900 antialiased">
            
            {{ $slot }}
        </div>
    </body>
</html>
