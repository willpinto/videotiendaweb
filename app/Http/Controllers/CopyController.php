<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use App\Models\Movie;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $copies = Copy::all();
        return view('copies.index')->with('copies',$copies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        return view('copies.create')->with('movies',$movies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Copy $copy)
    {
        $request->validate([
          'code'  => 'required',
          'movie_id'  => 'required',
          'state'  => 'required'
        ]);
        $copy->create($request->post());
        return redirect()->route('copies.index')
        ->with('success','Ejemplar creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Copy $copy)
    {
        return view('copies.show')->with('copy',$copy);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Copy $copy)
    {
        $movies = Movie::all();
        return view('copies.edit')->with(['copy'=>$copy,'movies' =>$movies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Copy $copy)
    {
        $request->validate([
            'code'  => 'required',
            'movie_id'  => 'required',
            'state'  => 'required'
          ]);
        $copy->update($request->all());
        return redirect()->route('copies.index')
        ->with('success','Ejemplar actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Copy $copy)
    {
        $copy->delete();
        return redirect()->route('copies.index')
        ->with('success','Ejemplar eliminado correctamente');
    }
}
