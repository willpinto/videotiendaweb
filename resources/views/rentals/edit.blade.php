@include('home')

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
<form action="{{ route('rentals.update', $rental->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código:</strong>
          <input type="number" value="{{ $rental->code }}" class="form-control rounded-5" name="code" id="code" required>
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
          <input type="date" value="{{ $rental->date }}" class="form-control rounded-5" name="date" id="date">
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
          <input type="date" value="{{ $rental->return_date }}" class="form-control rounded-5" name="return_date" id="return_date">
        </div>
        @error('return_date')
             <div class="alert alert-danger fade-show mt-1 mb-1">{{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </button>
            </div>
            @enderror
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Valor:</strong>
          <input type="number" value="{{ $rental->value }}" class="form-control rounded-5" name="value" id="value">
        </div>
     </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Multa:</strong>
          <input class="form-control rounded-5" value="{{ $rental->penalty }}" type="number" name="penalty" id="penalty">
        </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Documento Cliente:</strong>
          <select class="form-select rounded-5" name="genre_id" id="genre_id" required>
          @foreach ($clients as $client)
          <option value="{{ $client->id }}" @selected($client->id)>{{ $client->document }} - {{ $client->names }}</option>
         @endforeach
          </select>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código Ejemplar:</strong>
          <select class="form-select rounded-5" name="copy_id" id="copy_id" required>
          @foreach ($copies as $copy)
          <option value="{{ $copy->id }}">{{ $copy->code }}</option>
         @endforeach
          </select>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
          <strong class="form-label">Código recibo:</strong>
          <select class="form-select rounded-5" name="copy_id" id="copy_id" required>
          @foreach ($receipts as $receipt)
          <option value="{{ $receipt->id }}">{{ $receipt->code }}</option>
         @endforeach
          </select>
        </div>
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
