
@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="detalles/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID venta</th>
      <th scope="col">id articulo</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($detalles as $detalle)
    <tr>
        <td>{{$detalle->venta_id}}</td>
        <td>{{$detalle->articulo_id}}</td>
        <td>{{$detalle->cantidad}}</td>
        <td>
         <form action="{{ route('detalles.destroy',$detalle->venta_id) }}" method="POST">
          <a href="/detalles/{{$detalle->venta_id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
<h1>Hola esta es una edicion muy loka</h1>

@endsection