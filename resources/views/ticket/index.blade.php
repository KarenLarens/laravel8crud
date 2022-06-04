@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="tickets/create" class="btn btn-primary">CREAR</a>
<h1>Informacion de los tickets</h1>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">VENTA ID</th>
      <th scope="col">ARTICULO ID</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($tickets as $ticket)
    <tr>
        <td>{{$ticket->id}}</td>
        <td>{{$ticket->venta_id}}</td>
        <td>{{$ticket->articulo_id}}</td>
        <td>{{$ticket->cantidad}}</td>
        <td>
         <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
          <a href="/tickets/{{$ticket->id}}/edit" class="btn btn-info">Editar</a>         
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
