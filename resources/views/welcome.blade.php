<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="flex flex-col">
        {{-- @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @auth
            <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
        @else
        <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
        @endif
        @endauth
    </div>
    @endif
    --}}
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div class="text-center">
                <img src='./imgs/logo2.jpeg' width="400" alt="logo"></img>
            </div>
            <div>
                <h1 class="text-center">Coming soon. Watch this space!</h1>
            </div>
        </div>
    </div>
    </div>
</body>

</html>