<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Planets</title>
    </head>

    <body class="antialiased">
        @include('space.components.navigation')

        @include('space.components.body')

        @include('space.components.footer')
    </body>
</html>
