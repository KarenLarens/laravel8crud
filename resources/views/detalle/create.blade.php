@extends('layouts.plantillabase')

@section('contenido')
<h2>Agregar detalles a una compra</h2>

<form action="/detalles" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">id de la venta</label>
    <input id="venta_id" name="venta_id" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">articulo id</label>
    <input id="articulo_id" name="articulo_id" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <a href="/detalles" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>

@endsection
