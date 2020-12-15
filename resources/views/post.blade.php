@extends('layouts.base')

@section('content')
<h4 class="text-center w-100 mb-5">Postea la noticia!</h4>
<hr class="bg-light" width="80%">
<div class="row mb-5 mt-5 justify-content-center">    
    <form action="{{route('post')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="titulo">Titulo de la Noticia</label>
          <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
          <label for="cuerpo">Cuerpo de la noticia</label>
          <textarea class="form-control" id="cuerpo" name="cuerpo" rows="3" required></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="form-group">
            <label for="file">Examinar</label>
            <input type="file" class="form-control-file" id="file" name="file" required>
            </div>           
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>
@endsection