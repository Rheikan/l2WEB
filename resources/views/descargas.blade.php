@extends('layouts.base')

@section('content')
    <div class="row mb-5 mt-5">
        <h4 class="text-center w-100 mb-5">Sección de Descargas</h4>
        <hr class="bg-light" width="80%">
        <div class="col-sm-6">
            <div class="card bg-dark text-white dbox">
                <img class="card-img" src="/css/images/system.png" alt="system">
                <div class="card-img-overlay">
                  <h5 class="card-title bg-secondary">PARCHE</h5>
                  <p class="card-text bg-secondary">Descripción</p>
                  <a href="#" id="descarga"><p class="card-text bg-success">Click aqui para descargar</p></a>
                </div>
              </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-dark text-white dbox">
                <img class="card-img" src="/css/images/cliente.png" alt="cliente">
                <div class="card-img-overlay">
                  <h5 class="card-title bg-secondary">PARCHE 2</h5>
                  <p class="card-text bg-secondary">Descripción.</p>
                  <a href="#" id="descarga"><p class="card-text bg-success">Click aqui para descargar</p></a>
                </div>
              </div>
        </div>
    </div>
@endsection