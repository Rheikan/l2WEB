@extends('layouts.base')

@section('content')
  @foreach ($noticias as $new)
    <div class="row mb-5 mt-5">
        <div class="col-sm-12">         
            <div class="card text-center text-dark">
              <div class="card-header">
                Novedad!
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$new->titulo}}</h5>
                <p class="card-text">{{$new->noticia}}</p>
                <img src="{{$new->imagen}}" alt="{{$new->id}}" class="img-fluid">
              </div>
              <div class="card-footer text-muted">
                {{$new->updated_at->format('d-m-Y')}}
              </div>
            </div>          
          
        </div>
        <hr>
    </div>
  @endforeach
  {{$noticias->Links()}}
@endsection
