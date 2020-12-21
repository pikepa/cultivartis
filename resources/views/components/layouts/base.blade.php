<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

    <title>@yield('title') - {{ config('app.name') }}</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- <link rel='shortcut icon' href='asset(/favicon/favicon-96x96.png)'> -->

    <link rel="shortcut icon" href="{{ asset('favicon/favicon-32x32.png') }}">
    <!-- Fonts -->
    <link rel=" stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">

    @livewireStyles
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.x/dist/alpine.min.js" defer></script>
</head>

<body class='bg-yellow-100'>

    {{ $slot}}

    <script src="{{ url(mix('js/app.js')) }}"></script>

    @livewireScripts

</body>

</html>