
@include('home')
<div class="pull-right container">
    <a href="{{ route('rentals.index')}}" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-rotate-left"></i>
        Regresar</a>
</div>
<br>
<div class="container row-md-6">
<div class="card">
  <div class="card-header">
  <strong>Detalle de Alquiler</strong>
  </div>
  <div class="card-body">
  <strong class="card-title">Código:</strong>
     <p class="card-text">{{ $rental->code }}</p>
     <strong class="card-title">Fecha:</strong>
     <p class="card-text">{{ $rental->date }}</p>
     <strong class="card-title">Fecha Devolución:</strong>
     <p class="card-text">{{ $rental->return_date }}</p>
     <strong class="card-title">Valor:</strong>
     <p class="card-text">{{ $rental->value }}</p>
     <strong class="card-title">Multa:</strong>
     <p class="card-text">{{ $rental->penalty }}</p>
     <strong class="card-title">Documento Cliente:</strong>
     <p class="card-text">{{ $rental->Clients->document }}</p>
     <strong class="card-title">Código Ejemplar</strong>
     <p class="card-text">{{ $rental->Copies->code }}</p>
     <strong class="card-title">Código Recibo</strong>
     <p class="card-text">{{ $rental->Receipts->code }}</p>
  </div>
</div>
<br>
<a href="{{ route('movies.edit', $rental->id) }}" class="btn btn-success rounded-4">
<i class="fa-solid fa-pen-to-square"></i>
Editar</a>
</div>

