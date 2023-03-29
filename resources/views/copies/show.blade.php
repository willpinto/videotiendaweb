
@extends('layouts.app')

@section('content')
<div class="pull-right container">
    <a href="{{ route('copies.index')}}" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>
<br>
<div class="container row-md-6">
<div class="card">
  <div class="card-header">
  <strong>Detalle de Ejemplar</strong>
  </div>
  <div class="card-body">
  <strong class="card-title">Código:</strong>
     <p class="card-text">{{ $copy->code }}</p>
     <strong class="card-title">Descripción:</strong>
     <p class="card-text">{{ $copy->description }}</p>
     <strong class="card-title">Código Película:</strong>
     <p class="card-text">{{ $copy->Movies->code }}</p>
     <strong class="card-title">Estado:</strong>
     <p class="card-text">{{ $copy->state }}</p>
  </div>
</div>
<br>
<a href="{{ route('copies.edit', $copy->id) }}" class="btn btn-success rounded-4">
<i class="fa-solid fa-pen-to-square"></i>
Editar</a>
</div>
@endsection
