<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name', 'Servidor') }}</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
</head>
<body class="vh-100 cuerpo">
    <div class="container text-light">
        @yield('content')
    </div>
</body>
</html>
