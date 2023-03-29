@extends('layouts.app')

@section('content')
<div class="container">
<div class="pull-right">
    <a href="{{ route('rentals.index')}}" class="btn btn-outline-primary rounded-4">
     <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>

@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<br>
<form action="{{ route('rentals.store') }}" method="POST">
   @csrf
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código:</strong>
          <input type="number" class="form-control rounded-5" name="code" id="code" required>
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
          <strong class="form-label">Fecha:</strong>
          <input type="date" class="form-control rounded-5" name="date" id="date" required>
        </div>
         @error('date')
             <div class="alert alert-danger fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Fecha de Devolución:</strong>
          <input type="date" class="form-control rounded-5" name="return_date" id="return_date" required>
        </div>
        @error('return_date')
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
            <br>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Valor:</strong>
          <input type="number" class="form-control rounded-5" name="value" id="value">
        </div>
     </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Multa:</strong>
          <input class="form-control rounded-5" type="number" name="penalty" id="penalty">
        </div>
        @error('penalty')
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
          <strong class="form-label">Documento Cliente:</strong>
          <select class="form-select rounded-5" name="client_id" id="client_id" required>
          @foreach ($clients as $client)
          <option value="{{ $client->id }}" @if($client_id == $client->id) selected @endif>{{ $client->document }} - {{ $client->names }}</option>
         @endforeach
          </select>
        </div>
         @error('client_id')
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
          <strong class="form-label">Código Ejemplar:</strong>
          <select class="form-select rounded-5" name="copy_id" id="copy_id" required>
          @foreach ($copies as $copy)
          <option value="{{ $copy->id }}" @if($copy_id == $copy->id) selected @endif>{{ $copy->code }}</option>
         @endforeach
          </select>
        </div>
         @error('copy_id')
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
          <strong class="form-label">Código recibo:</strong>
          <select class="form-select rounded-5" name="receipt_id" id="receipt_id" required>
          @foreach ($receipts as $receipt)
          <option value="{{ $receipt->id }}" @if($receipt_id == $receipt->id) selected @endif>{{ $receipt->code }}</option>
         @endforeach
          </select>
        </div>
         @error('receipt_id')
        <br>
             <div class="alert alert-danger alert-dismissible fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
        <br>
        </div>
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
