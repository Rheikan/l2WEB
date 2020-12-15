@extends('layouts.reporte')

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
              Detalles de la cuenta logueada
            </div>
            <div class="card-body">
              <h5 class="card-title">Listado de Items</h5>
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID Item</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Donde?</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($char as $item)
                    <tr>
                        <td><a href="https://l2db.info/search?query={{$item->item_id}}" target="_blank">{{$item->item_id}}</a></td>
                        <td>{{$item->count}}</td>
                        @if ($item->loc == 'PAPERDOLL')
                          <td class="text-success">EQUIPADO</td>
                        @elseif($item->loc == 'INVENTORY')
                          <td class="text-warning">INVENTARIO</td>
                        @endif
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

    </div>
</div>
@endsection
