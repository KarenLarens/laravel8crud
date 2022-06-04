@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="ventas/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Empleado</th>
      <th scope="col">Usuario</th>
      <th scope="col">Fecha de creación</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($ventas as $venta)
    <tr>
        <td>{{$venta->id}}</td>
        <td>{{$venta->empleado_id}}</td>
        <td>{{$venta->usuario_id}}</td>
        <td>{{$venta->created_at}}</td>
        <td>
         <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
          <a href="/ventas/{{$venta->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
