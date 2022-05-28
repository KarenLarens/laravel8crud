@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR NUEVA CATEGORIA</h2>

<form action="/Categoria" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
  </div>
  <a href="/Categoria" class="btn btn-secondary" tabindex="3">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="2">Guardar</button>
</form>
@endsection