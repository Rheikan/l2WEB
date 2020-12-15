@extends('layouts.base')

@section('content')
<h4 class="text-center w-100 mb-5">Nueva Cuenta</h4>
<hr class="bg-light" width="80%">
<div class="row mb-5 mt-5 text-center justify-content-center">    
    <div class="card bg-dark">
        <div class="card-header">
            Datos de la cuenta
        </div>
        <div class="card-body">
            <form action="{{route('crearcuenta')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="login">Nombre de usuario</label>
                          <input type="text" class="form-control" name="login" id="login">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" >
                          </div>
                    </div>                    
                </div>
                <button type="submit" class="btn btn-primary">Crear!</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            Maximo 12 cuentas
        </div>
    </div>
</div>
@endsection