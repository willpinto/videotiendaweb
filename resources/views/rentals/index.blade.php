
@include('home')

<div class="container">
  <a class="btn btn-primary rounded-5" href="{{ route('rentals.create') }}">
  <i class="fa-solid fa-plus"></i>
  Crear Alquiler</a>
</div>
<br>
 @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
<br>

<div class="container">
<table class="table table-bordered">
  <thead>
     <tr>
       <th>Código</th>
       <th>Fecha</th>
       <th>Fecha Devolución</th>
       <th>Valor</th>
       <th>Multa</th>
       <th>Documento Cliente</th>
       <th>Código ejemplar</th>
       <th>Código recibo</th>
       <th>Acciones</th>
     </tr>
  </thead>
  <tbody>
   @foreach ($rentals as $rental)
       <tr>
         <td>{{ $rental->code }}</td>
         <td>{{ $rental->date }}</td>
         <td>{{ $rental->return_date }}</td>
         <td>{{ $rental->value }}</td>
         <td>{{ $rental->penalty }}</td>
         <td>{{ $rental->Clients->document }}</td>
         <td>{{ $rental->Copies->code }}</td>
         <td>{{ $rental->Receipts->code }}</td>
         <td>
         <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('rentals.show', $rental->id) }}">
            <i class="fa-solid fa-eye"></i>     
            </a>
            <a class="btn btn-success" href="{{ route('rentals.edit', $rental->id) }}">
            <i class="fa-solid fa-pen-to-square"></i>
            </a>
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger">
               <i class="fa-solid fa-trash-can"></i>
           </button>       
         </form>
         </td>
       </tr>
   @endforeach
   </tbody>
</table>
</div>
