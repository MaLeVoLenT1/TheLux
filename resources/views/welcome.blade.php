<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Lux Suites</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    The Lux Suites
                </div>

                <div class="links">
                    <a href="{{ url('home') }}">Home</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('contact') }}">Location</a>
                    <a href="{{ route('blog') }}">Blog</a>
                </div>
            </div>
        </div>
    </body>
</html>