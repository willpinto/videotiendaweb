
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
<form action="{{ route('receipts.update', $receipt->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código:</strong>
          <input type="number" value="{{ $receipt->code }}" class="form-control rounded-5" name="code" id="code">
        </div>
         @error('code')
             <div class="alert alert-danger fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Nombre:</strong>
          <input type="text" value="{{ $receipt->name}}" class="form-control rounded-5" name="name" id="name">
        </div>
         @error('name')
             <div class="alert alert-danger fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Total:</strong>
          <input type="number" value="{{ $receipt->total }}" class="form-control rounded-5" name="total" id="total">
        </div>
         @error('total')
             <div class="alert alert-danger fade-show mt-1 mb-1">{{ $message }}
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

