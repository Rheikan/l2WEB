@extends('layouts.base')

@section('content')

      <div class="row mb-5 mt-5">
          <div class="col-sm-6 text-center">
              <img src="{{$randomImage}}"  class="d-inline-block align-top char img-fluid" alt="Char">
          </div>
          <div class="col-sm-6 text-center pj">
              <img src="/css/images/cds.png" alt="logazo" class="img-fluid">
              <h1 class="text-center">Bienvenido aventurero!</h1>
          </div>
      </div>
      <hr class="bg-light">
      <h4 class="text-center mb-5">Streamers!! seguilos y apoya su trabajo!</h4>
      <div class="row mb-5 mt-5">
        <div class="col-sm-6">
          <a href="#" target="_blank">
            <div class="card bg-dark text-white twich">
              <img class="card-img" src="/css/images/twitch.svg" alt="Card image" width="100" height="150">
              <div class="card-img-overlay">
                <h5 class="card-title text-danger tw">Streamer 1</h5>
                <p class="card-text text-danger tw">Apoya nuestra comunidad de Streamers!</p>
                <p class="card-text text-danger tw">Click para ir!</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6">
          <a href="#" target="_blank">
            <div class="card bg-dark text-white twich">
              <img class="card-img" src="/css/images/twitch.svg" alt="Card image" width="100" height="150">
              <div class="card-img-overlay">
                <h5 class="card-title text-danger tw">Streamer 2</h5>
                <p class="card-text text-danger tw">Apoya nuestra comunidad de Streamers!</p>
                <p class="card-text text-danger tw">Click para ir!</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row mb-5 mt-5">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ?list=PLJmvyRGClNKiEWKe-lJdfNxImgefHCfQJ" allowfullscreen></iframe>
          </div>
      </div>
      <hr width="80%">
      <div class="row mb-5 mt-5">
        <div class="col-sm-12 text-center">
          <h4>Vota por nosotros y consigue el Vote token para ganar el evento!</h4>
          <ul id="vote">
            <li><a href='#' title='Vota HOPZONE' target="_blank"><img src='https://hopzone.r.worldssl.net/img/_vbanners/lineage2/Vote_12.gif' width='120' height='70'></a></li>
            <li><a href="#" title='Vota L2NETWORK' target="_blank"><img src="https://l2network.eu/button.php?u=jogus&buttontype=static" class="vote"></a></li>
            <li><a href="#" title='Vota L2JBRASIL' target="_blank"><img src="css/images/l2jbrasil.jpg" class="vote"></a></li>
        </ul>
        </div>
      </div>
      <hr width="80%">
      <div class="row mb-5 mt-5">
        <div class="col-sm-12">
          <p class="text-center">
            Gracias por elegirnos! , con el esfuerzo que dia a dia nuestro staff aporta logramos grandes cambios
            como ser la nueva VPS que es a todo terreno, anti DDoS y alta prestancia.
            Tambien pudimos solucionar muchisimos Bugs que acarreaba el inicio y seguimos trabajando.
            <br>
            <br>
            Una vez mas, El equipo agradece tu estancia en nuestro server, Que jugues mucho y te diviertas!
          </p>
        </div>
      </div>
      <hr class="bg-light mb-3" width="80%">
      <div class="container">
        <h4 class="text-center">Apurate a votar! hay un gran premio cada mes!!!!</h4><br>
        <h5 class="text-center">No lo sabias? estas a tiempo, aqui te dejo los que mas tienen!</h5><br>
        <small class="text-mutted text-center">*Incluye Warehouse</small><br>
        <table class="table table-sm table-dark">
          <thead>
            <tr>
              <th scope="col">PJ</th>
              <th scope="col">Tokens de Votación</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($votecoin as $item)
              <tr>
                  <td>{{$item->pj->char_name}}</td>
                  <td>{{$item->count}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="row pl-4 mb-5 mt-5">
        <div class="col-sm-4">
          <div class="card bg-dark" style="width: 18rem;">
            <img class="card-img-top" src="/css/images/back.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Comunidad Agradable</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-dark" style="width: 18rem;">
            <img class="card-img-top" src="/css/images/back.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Atencion de los GM activamente</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-dark" style="width: 18rem;">
            <img class="card-img-top" src="/css/images/back.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">server sin BOTS, somos los que somos!</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="bg-light">
      <h4 class="text-center">Algunas Pics del server</h4>
      <div class="row mb-5 mt-5">
        <div class="col-sm-12">
          <div id="carrusel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 cpic" src="{{$files[0]}}" alt="logo">
              </div>
              @foreach ($files as $img)
                @if ($img != '/css/images/carousel/back.jpg')
                  <div class="carousel-item">
                    <img class="d-block w-100 cpic" src="{{$img}}" alt="{{$img}}">
                  </div>
                @endif
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

@endsection
