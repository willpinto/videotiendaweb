
@extends('layouts.app')


@section('content')
<div class="container">
<div class="pull-right">
    <a href="{{ route('receipts.index')}}" class="btn btn-outline-primary rounded-4">
     <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>

@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<br>
<form action="{{ route('receipts.store') }}" method="POST">
   @csrf
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código:</strong>
          <input type="number" class="form-control rounded-5" name="code" id="code" required>
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
          <strong class="form-label">Nombre:</strong>
          <input type="text" class="form-control rounded-5" name="name" id="name" required>
        </div>
         @error('name')
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
          <strong class="form-label">Total:</strong>
          <input type="number" class="form-control rounded-5" name="total" id="total" required>
        </div>
         @error('total')
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
