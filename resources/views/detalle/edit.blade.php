@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR detalles de venta </h2>

<form action="/detalles/{{$detalle->venta_id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Id venta</label>
    <input id="venta_id" name="venta_id" type="text" class="form-control" value="{{$detalle->venta_id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">id articulo</label>
    <input id="articulo_id" name="articulo_id" type="text" class="form-control" value="{{$detalle->articulo_id}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
  </div>
  <a href="/detalles" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


