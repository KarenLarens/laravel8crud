@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="usuarios/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->email}}</td>
        <td>
         <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
          <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
<h1>Usuarios registrados en el sistema</h1>

@endsection
