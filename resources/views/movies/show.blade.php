
@extends('layouts.app')

@section('content')
<div class="pull-right container">
    <a href="{{ route('movies.index')}}" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>
<br>
<div class="container row-md-6">
<div class="card">
  <div class="card-header">
  <strong>Detalle de Película</strong>
  </div>
  <div class="card-body">
  <strong class="card-title">Código:</strong>
     <p class="card-text">{{ $movie->code }}</p>
     <strong class="card-title">Titulo:</strong>
     <p class="card-text">{{ $movie->title }}</p>
     <strong class="card-title">Duración:</strong>
     <p class="card-text">{{ $movie->duration }}</p>
     <strong class="card-title">Cantidad:</strong>
     <p class="card-text">{{ $movie->quantity }}</p>
     <strong class="card-title">Descripción:</strong>
     <p class="card-text">{{ $movie->description }}</p>
     <strong class="card-title">Género</strong>
     <p class="card-text">{{ $movie->Genres->name }}</p>
  </div>
</div>
<br>
<a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-success rounded-4">
<i class="fa-solid fa-pen-to-square"></i>
Editar</a>
</div>
@endsection
