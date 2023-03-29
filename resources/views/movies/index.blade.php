
@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-primary rounded-5" href="{{ route('movies.create') }}">
  <i class="fa-solid fa-plus"></i>
  Crear Película</a>
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
<table class="table table-responsive-lg table-bordered table-striped">
  <thead>
     <tr>
       <th>Código</th>
       <th>Titulo</th>
       <th>Duración</th>
       <th>Cantidad</th>
       <th>Descripción</th>
       <th>Género</th>
       <th>Acciones</th>
     </tr>
  </thead>
  <tbody>
   @foreach ($movies as $movie)
       <tr>
         <td>{{ $movie->code }}</td>
         <td>{{ $movie->title }}</td>
         <td>{{ $movie->duration }}</td>
         <td>{{ $movie->quantity }}</td>
         <td>{{ $movie->description }}</td>
         <td>{{ $movie->Genres->name }}</td>
         <td>
         <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('movies.show', $movie->id) }}">
            <i class="fa-solid fa-eye"></i>     
            </a>
            <a class="btn btn-success" href="{{ route('movies.edit', $movie->id) }}">
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
