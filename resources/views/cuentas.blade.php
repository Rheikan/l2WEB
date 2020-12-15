@extends('layouts.base')

@section('content')
<div class="row mb-5 mt-5">
  @if(session('Mensaje'))
    <div class="alert alert-primary w-90 alert-dismissible fade show Mensaje" role="alert">
    <strong>{{ session('Mensaje')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
    <div class="col-sm-12">
        <div class="card bg-dark text-center">
            <div class="card-header">
              Seccion de Cuentas de jugadores
            </div>
            <div class="card-body">
              <h5 class="card-title">Login</h5>
              <p class="card-text">Realiza la identificacion de la cuenta para cambiar contraseña o conocer los personajes de tu cuenta.</p>
              <form action="{{route('login')}}" method="post">
                  @csrf
                  <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cuenta">Nombre de cuenta</label>
                            <input type="text" class="form-control" name="cuenta" id="cuenta" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Ingresa el nombre de la cuenta que quieres consultar</small>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="token">Token de Seguridad</label>
                          <input type="text" class="form-control" name="token" id="token" aria-describedby="helpId">
                          <small id="helpId" class="form-text text-muted">Ingresa el token de seguridad enviado al email de tu cuenta</small>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Login!</button>
                      </div>
                  </div>
              </form>
            </div>
            <div class="card-footer text-muted">
              *Debes revisar tu correo para colocar el token de seguridad
            </div>
        </div>
        @isset($cuenta)
        <hr>
        <div class="card bg-dark text-center">
        <div class="card-header">
            Detalles de la cuenta logueada
        </div>
        <div class="card-body">
            <h5 class="card-title">Personajes</h5>
            <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">CUENTA</th>
                <th scope="col">PERSONAJE</th>
                <th scope="col">NIVEL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chars as $it)
                <tr>
                    <td>{{$cuenta}}</td>
                    <td>{{$it->char_name}}</td>
                    <input type="hidden" name="objeto" id="objeto" value="{{$it->obj_Id}}">
                    <td>{{$it->level}}</td>
                    <td>
                    <a href="{{route('items',$it->obj_Id)}}" target="_blank">
                        <button type="button" class="btn btn-success" id="boton" data-toggle="modal" data-target="#items">
                        Ver Items
                        </button>
                    </a>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
          <hr>
          <div class="card bg-dark text-center">
            <div class="card-header">
              Cambio de Contraseña
            </div>
            <div class="card-body">
              <form action="{{route('passchange')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="pass">Ingresa la nueva contraseña</label>
                <input type="hidden" name="cuenta" value="{{$cuenta}}">
                <input type="hidden" name="token" value="{{$token}}">
                <input type="password" class="form-control" name="pass" id="pass"></div>
              <button type="submit" class="btn btn-danger">Cambiar!</button>
              </form>
            </div>
            <div class="card-footer text-muted">
              La contraseña si has de olvidarte, recuerda que podras cambiarla nuevamente con el TOKEN
            </div>
          </div>
          @if ($cuenta == 'ADMIN')
            <div class="card bg-dark text-center mt-5">
              <div class="card-header">
                POST DE NOTICIAS
              </div>
              <div class="card-body">
                <a name="posteo" id="posteo" class="btn btn-info" href="{{route('newpost')}}" role="button">Postear!</a>
              </div>              
            </div> 
          @endif
          
        @endisset
    </div>
@endsection

