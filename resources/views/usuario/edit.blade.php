@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$usuario->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">email</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$usuario->email}}">
  </div>
  
  <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection