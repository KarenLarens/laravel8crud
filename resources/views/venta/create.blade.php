@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR UNA VENTA</h2>

<form action="/ventas" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="id" name="id" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Empleado</label>
    <input id="empleado_id" name="empleado_id" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input id="usuario_id" name="usuario_id" type="number" class="form-control" tabindex="3">
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>

@endsection
