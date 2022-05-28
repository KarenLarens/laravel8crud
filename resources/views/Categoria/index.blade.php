@extends('layouts.plantillabase');

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Categoria/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre de la categoria</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($categorias as $categoria)
    <tr>
        <td>{{$categoria->id}}</td>
        <td>{{$categoria->nombre}}</td>
        <td>
          <a href="/Categoria/{{$categoria->id}}/edit" class="btn btn-info">Editar</a>         
          <button class="btn btn-danger">Delete</button>     
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection