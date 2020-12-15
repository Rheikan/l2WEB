@extends('layouts.base')

@section('content')
<h4 class="text-center w-100 mb-5">Nuestras Redes!</h4>
<hr class="bg-light" width="80%">
<div class="row mb-5 mt-5 no-gutters">    
    <div class="col-sm-6">
        <a href="#" class="face-t">
            <div class="card text-light face">
                <img class="card-img-top face-i" src="/css/images/face.svg" alt="Face">
                <div class="card-body">
                    <p class="card-text text-center">Visitanos en Facebook y enterate de las novedades!</p>
                </div>
            </div>
        </a>        
    </div>
    <div class="col-sm-6">
        <a href="#" class="face-t">
            <div class="card text-light face content-justify-center">
                <img class="card-img-top face-i" src="/css/images/face.svg" alt="Face">
                <div class="card-body">
                    <p class="card-text text-center">Pagina alternativa de Facebook !</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection