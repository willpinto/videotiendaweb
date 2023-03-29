
@extends('layouts.app')

@section('content')

<div class="pull-right container">
    <a href="{{ route('genres.index')}}" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>
<br>
<div class="container row-md-6">
<div class="card">
  <div class="card-header">
  <strong>Detalle de Género</strong>
  </div>
  <div class="card-body">
  <strong class="card-title">Código</strong>
     <p class="card-text">{{ $genre->code }}</p>
     <strong class="card-title">Nombre:</strong>
     <p class="card-text">{{ $genre->name }}</p>
     <strong class="card-title">Fecha creación:</strong>
     <p class="card-text">{{ $genre->created_at }}</p>
  </div>
</div>
<br>
<a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-success rounded-4">
<i class="fa-solid fa-pen-to-square"></i>
Editar</a>
</div>
@endsection
