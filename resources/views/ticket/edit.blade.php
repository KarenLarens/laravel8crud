@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR tickets</h2>

<form action="/tickets/{{$ticket->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">id de la venta </label>
    <input id="venta_id" name="venta_id" type="number" class="form-control" value="{{$ticket->venta_id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">id del articulo</label>
    <input id="articulo_id" name="articulo_id" type="number" class="form-control" value="{{$ticket->articul_id}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$ticket->cantidad}}">
  </div>

  <a href="/tickets" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
