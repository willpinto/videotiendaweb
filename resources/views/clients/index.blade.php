
@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-primary rounded-5" href="{{ route('clients.create') }}">
  <i class="fa-solid fa-plus"></i>
  Crear Nuevo</a>
</div>
<br>
 @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
<br>

<div class="container">
<table class="table table-bordered table-striped">
  <thead>
     <tr>
       <th>Documento</th>
       <th>Nombres</th>
       <th>Apellidos</th>
       <th>Dirección</th>
       <th>Celular</th>
       <th>Correo</th>
       <th>Fecha Nacimiento</th>
       <th>Género</th>
       <th>Acciones</th>
     </tr>
  </thead>
  <tbody>
   @foreach ($clients as $client)
       <tr>
         <td>{{ $client->document }}</td>
         <td>{{ $client->names }}</td>
         <td>{{ $client->surnames }}</td>
         <td>{{ $client->address }}</td>
         <td>{{ $client->celphone }}</td>
         <td>{{ $client->email }}</td>
         <td>{{ $client->birth_date }}</td>
         <td>{{ $client->gender }}</td>
         <td>
         <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}">
            <i class="fa-solid fa-eye"></i>     
            </a>
            <a class="btn btn-success" href="{{ route('clients.edit', $client->id) }}">
            <i class="fa-solid fa-pen-to-square"></i>
            </a>
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger">
               <i class="fa-solid fa-trash-can"></i>
           </button>       
         </form>
         </td>
       </tr>
   @endforeach
   </tbody>
</table>
</div>
@endsection
