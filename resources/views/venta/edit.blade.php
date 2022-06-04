@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR Venta</h2>

<form action="/ventas/{{$venta->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$venta->id}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Empleado</label>
    <input id="empleado_id" name="empleado_id" type="text" class="form-control"  value="{{$venta->empleado_id}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input id="usuario_id" name="usuario_id" type="number" class="form-control" value="{{$venta->usuario_id}}">
  </div>
  <a href="/ventas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
