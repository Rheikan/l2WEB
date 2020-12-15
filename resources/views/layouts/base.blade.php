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
    @if(session('Mensaje'))
    <div class="alert alert-primary w-90 alert-dismissible fade show Mensaje" role="alert">
    <strong>{{ session('Mensaje')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark text-light barra fixed-top mb-5 ">
        <a class="navbar-brand" href="#">
            <img src="/css/images/back.jpg" width="35" height="35" class="d-inline-block align-top" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item barbut">
              <a class="nav-link" href="{{route('main')}}">Inicio</a>
            </li>
            <li class="nav-item barbut">
                <a class="nav-link" href="{{route('noticias')}}">Noticias</a>
              </li>
            <li class="nav-item barbut">
              <a class="nav-link" href="{{route('cuentas')}}">Cuentas</a>
            </li>
            <li class="nav-item barbut">
              <a class="nav-link" href="{{route('descargas')}}">Descargas</a>
            </li>
            <li class="nav-item barbut">
              <a class="nav-link" href="{{route('redes')}}">Redes</a>
            </li>
            <li class="nav-item barbut">
              <a class="nav-link" href="{{route('nuevacuenta')}}">Crear Cuenta!</a>
            </li>            
            <li class="nav-item barbut">
                <a class="nav-link" href="#LinkFORO" target="_blank">Foro</a>
            </li>
            <li class="nav-item bg-primary barbutd rounded">
              <a class="nav-link" href="{{route('donacion')}}" >Donación</a>
            </li>
            <li class="nav-item bg-danger barbutd rounded dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('donacion')}}" >
                Token Web
                <form class="dropdown-menu bg-dark text-light p-4 m-4 token" method="POST" action="{{route('otoken')}}">
                    @csrf
                    <div class="form-group">
                        <label for="acc">Nombre de la Cuenta</label>
                        <input type="text" class="form-control" id="acc" name="acc">
                        <small class="text-mutted">Se enviara un correo al email asociado</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar!</button>
                </form>
              </a>              
            </li>
          </ul>
          <?php
          $fp = fsockopen('144.217.81.124',7777,$errno,$errstr,5);
              if($fp)
              {
                  $estado ='1';
              }else{
                  $estado ='2';
              }
              fclose($fp);
          ?>
          @if ($estado == '1')
          <span class="navbar-text badge badge-success status barbutd">Server Online</span>
          @else
          <span class="navbar-text badge badge-danger statusno barbutd">Server Offline</span>
          @endif
        </div>
      </nav>
      <div class="container box text-light rounded">
        @yield('content')
      </div>
    <footer class="text-light footer">
        <br>
        <!-- Copyright -->
        <div class="footer-copyright fixed-bottom text-light text-center py-3">
            ©{{date('Y')}} Copyright <a href="{{ route('main')}}">Rheikan</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
