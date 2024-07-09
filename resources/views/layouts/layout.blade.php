<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('metadatos')
        <title>@yield('title', 'Laravel 6')</title>
        <link rel="stylesheet" href="@yield('styles', '')">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        @yield('content')

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
