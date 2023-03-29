<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index')->with('movies',$movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.create')->with('genres',$genres);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Movie::create($request->post());
        return redirect()->route('movies.index')
        ->with('success','Película creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show')->with('movie',$movie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit')->with(['movie' => $movie,'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        return redirect()->route('movies.index')
        ->with('success','Película actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')
        ->with('success','Película eliminado correctamente');
    }
}
