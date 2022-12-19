<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Leads to Closings') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap">

        <!-- Scripts -->
        @vite('resources/js/app.js')

        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link href="/storage/mdb.min.css" rel="stylesheet" />

        @vite('resources/css/main.css')

        @livewireStyles
    </head>
    <body class="leads">
        @include('layouts.nav')

        <!-- Page Content -->
        <main class="container">
            {{ $slot }}
        </main>

        @include('layouts.footer')

        @livewireScripts

        <script src="/storage/mdb.min.js" type="text/javascript"></script>

        <script>
        document.addEventListener("DOMContentLoaded", () => {
            // To prevent MDB ugly render on initial load
            document.getElementById('leads-page').style.display = 'block';
        });
        </script>
    </body>
</html>
