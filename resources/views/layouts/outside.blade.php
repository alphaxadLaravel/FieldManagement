<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}" />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{asset('vendor/fonts/boxicons.css')}}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{asset('vendor/css/core.css')}}"  />
        <link rel="stylesheet" href="{{asset('vendor/css/theme-default.css')}}"  />
        <link rel="stylesheet" href="{{asset('css/demo.css')}}" />

        <!-- Page -->
        <link rel="stylesheet" href="{{asset('vendor/css/pages/page-auth.css')}}" />

        {{-- Livewire styles here --}}
        @livewireStyles
    </head>
    <body class="antialiased">

        @yield('outside')


        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{asset('vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>
        <script src="{{asset('vendor/js/bootstrap.js')}}"></script>
        <script src="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

        <script src="{{asset('vendor/js/menu.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('js/main.js')}}"></script>

        {{-- Livewire scripts --}}
        @livewireScripts

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
