
@extends('layouts.app')

@section('content')
<div class="pull-right container">
    <a href="{{ route('clients.index')}}" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>
<br>
<div class="container row-md-6">
<div class="card">
  <div class="card-header">
  <strong>Detalle de Cliente</strong>
  </div>
  <div class="card-body">
  <strong class="card-title">Documento:</strong>
     <p class="card-text">{{ $client->document }}</p>
     <strong class="card-title">Nombres:</strong>
     <p class="card-text">{{ $client->names }}</p>
     <strong class="card-title">Apellidos:</strong>
     <p class="card-text">{{ $client->surnames }}</p>
     <strong class="card-title">Dirección:</strong>
     <p class="card-text">{{ $client->address }}</p>
     <strong class="card-title">Celular:</strong>
     <p class="card-text">{{ $client->celphone }}</p>
     <strong class="card-title">Correo</strong>
     <p class="card-text">{{ $client->email }}</p>
     <strong class="card-title">Fecha Nacimiento:</strong>
     <p class="card-text">{{ $client->birth_date }}</p>
     <strong class="card-title">Género:</strong>
     <p class="card-text">{{ $client->gender }}</p>
  </div>
</div>
<br>
<a href="{{ route('clients.edit', $client->id) }}" class="btn btn-success rounded-4">
<i class="fa-solid fa-pen-to-square"></i>
Editar</a>
</div>
@endsection
