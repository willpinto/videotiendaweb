@extends('home')

@section('content')

<div class="container">
  <a href="">
  <i class="fa-solid fa-plus"></i>
  Crear Nuevo</a>
</div>

<table class="table table-bordered">
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
         
         </td>
       </tr>
   @endforeach
   </tbody>
</table>

