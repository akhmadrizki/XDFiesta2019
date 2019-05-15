<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app-name','XD Site')}}</title>
    </head>
    <body>
        @include('layouts.navbar')
        @yield('content')
    </body>
</html>
