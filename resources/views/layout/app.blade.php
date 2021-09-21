<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('jfbiswajit/ssl-commerz::layout.header-links')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
    @include('jfbiswajit/ssl-commerz::layout.footer-scripts')
</body>

</html>
