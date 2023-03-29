@extends('layouts.app')

@section('content')
<div class="container">
<div class="pull-right">
    <a href="{{ route('movies.index')}}" class="btn btn-outline-primary rounded-4">
     <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>

@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<br>
<form action="{{ route('movies.update', $movie->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código:</strong>
          <input type="number" value="{{ $movie->code }}" class="form-control rounded-5" name="code" id="code" required>
        </div>
         @error('code')
         <br>
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">
             {{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
            <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Titulo:</strong>
          <input type="text" value="{{ $movie->title }}" class="form-control rounded-5" name="title" id="title">
        </div>
         @error('title')
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
            <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Duración:</strong>
          <input type="text" value="{{ $movie->duration }}" class="form-control rounded-5" name="duration" id="duration">
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Cantidad:</strong>
          <input type="text" value="{{ $movie->quantity }}" class="form-control rounded-5" name="quantity" id="quantity">
        </div>
        <br>
     </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Descripción:</strong>
          <textarea class="form-control rounded-5" name="description" id="description" cols="0" rows="2">{{ $movie->description }}
          </textarea>
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Género:</strong>
          <select class="form-select rounded-5" name="genre_id" id="genre_id" required>
          <option value="" selected hidden>Seleccione</option>
          @foreach ($genres as $genre)
          <option value="{{ $genre->id }}" @if($genre_id == $genre->id) selected @endif>{{ $genre->name }}</option>
         @endforeach
          </select>
        </div>
        @error('genre_id')
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
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
