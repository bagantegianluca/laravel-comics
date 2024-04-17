<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comics</title>

        <!-- Google Open Sans font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Import App style -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="antialiased">

       @include('partials.header')

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer-top')
            @include('partials.footer-body')
            @include('partials.footer-bottom')
        </footer>

    </body>

</html>