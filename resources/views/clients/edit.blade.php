@extends('layouts.app')

@section('content')
<div class="container">
<div class="pull-right">
    <a href="{{ route('clients.index')}}" class="btn btn-outline-primary rounded-4">
     <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>

@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<br>
<form action="{{ route('clients.update', $client->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Documento:</strong>
          <input type="number" value="{{ $client->document }}" class="form-control rounded-5" name="document" id="document" required>
        </div>
         @error('document')
         <br>
             <div class="alert alert-danger fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
            <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Nombres:</strong>
          <input type="text" value="{{ $client->names }}" class="form-control rounded-5" name="names" id="names">
        </div>
         @error('names')
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
          <strong class="form-label">Apellidos:</strong>
          <input type="text" value="{{ $client->surnames }}" class="form-control rounded-5" name="surnames" id="surnames">
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Dirección:</strong>
          <input type="text" value="{{ $client->address }}" class="form-control rounded-5" name="address" id="address">
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Celular:</strong>
          <input type="number" value="{{ $client->celphone }}" class="form-control rounded-5" name="celphone" id="celphone">
        </div>
        <br>
     </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Correo:</strong>
          <input type="email" value="{{ $client->email }}" class="form-control rounded-5" name="email" id="email" required>
        </div>
         @error('email')
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
          <strong class="form-label">Fecha de nacimiento:</strong>
          <input type="date" value="{{ $client->birth_date }}" class="form-control rounded-5" name="birth_date" id="birth_date">
        </div>
        <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Género:</strong>
          <select class="form-select rounded-5" name="gender" id="gender">
          <option value="masculino" @if($client->gender == 'masculino') selected @endif> Masculino</option>
          <option value="femenino" @if($client->gender == 'femenino') selected @endif> Femenino</option>
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
