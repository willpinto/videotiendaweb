
@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-primary rounded-5" href="{{ route('copies.create') }}">
  <i class="fa-solid fa-plus"></i>
  Crear Nuevo</a>
  <br>
 @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
</div>

<br>

<div class="container">
<table class="table table-bordered table-striped">
  <thead>
     <tr>
       <th>Código</th>
       <th>Descripción</th>
       <th>Código de la película</th>
       <th>Estado</th>
       <th>Acciones</th>
     </tr>
  </thead>
  <tbody>
   @foreach ($copies as $copy)
       <tr>
         <td>{{ $copy->code }}</td>
         <td>{{ $copy->description }}</td>
         <td>{{ $copy->Movies->code }}</td>
         <td>{{ $copy->state }}</td>
         <td>
         <form action="{{ route('copies.destroy', $copy->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('copies.show', $copy->id) }}">
            <i class="fa-solid fa-eye"></i>     
            </a>
            <a class="btn btn-success" href="{{ route('copies.edit', $copy->id) }}">
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
@endsection

