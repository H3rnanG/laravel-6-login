<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 6 y Bootstrap 5</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

    <h1>Hola Mundo</h1>

    <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>