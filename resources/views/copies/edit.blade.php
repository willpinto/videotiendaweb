@extends('layouts.app')

@section('content')
<div class="container">
<div class="pull-right">
    <a href="{{ route('copies.index')}}" class="btn btn-outline-primary rounded-4">
     <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>

@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<br>
<form action="{{ route('copies.update', $copy->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código:</strong>
          <input type="number" value="{{ $copy->code }}" class="form-control rounded-5" name="code" id="code" required>
        </div>
         @error('code')
         <br>
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
            <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Descripción:</strong>
          <textarea class="form-control rounded-5" name="description" id="description" cols="0" rows="2">{{ $copy->description }}</textarea>
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código película:</strong>
          <select class="form-select rounded-5" name="movie_id" id="movie_id">
           @foreach ($movies as $movie)
               <option value="{{ $movie->id }}" @if($movie_id == $movie->id) selected @endif>{{ $movie->code}} - {{ $movie->title }}</option>
           @endforeach
          </select>
        </div>
         @error('movie_id')
         <br>
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
          <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Estado:</strong>
          <select class="form-select rounded-5" name="state" id="state" required>
          <option value="Disponible" @if($copy->state == 'Disponible') selected @endif>Disponible</option>
          <option value="Prestado" @if($copy->state == 'Prestado') selected @endif>Prestado</option>
          <option value="Reservado" @if($copy->state == 'Reservado') selected @endif>Reservado</option>
          <option value="Dañado" @if($copy->state == 'Dañado') selected @endif>Dañado</option>
          <option value="Perdido" @if($copy->state == 'Perdido') selected @endif>Perdido</option>
          </select>
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
     <div class="form-group">
       <button type="submit" class="btn btn-success rounded-5">
        <i class="fa-solid fa-floppy-disk"></i>
        Guardar
       </button>
     </div>
     </div>
   </div>
</form>
</div>
@endsection
