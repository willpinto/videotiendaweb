@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-primary" href="{{ route('genres.create') }}">
  <i class="fa-solid fa-plus"></i>
  Crear Nuevo</a>
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
       <th>Nombre</th>
       <th>Acciones</th>
     </tr>
  </thead>
  <tbody>
   @foreach ($genres as $genre)
       <tr>
         <td>{{ $genre->code }}</td>
         <td>{{ $genre->name }}</td>
         <td>
         <form action="{{ route('genres.destroy', $genre->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('genres.show', $genre->id) }}">
            <i class="fa-solid fa-eye"></i>       
            </a>
            <a class="btn btn-success" href="{{ route('genres.edit', $genre->id) }}">
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
