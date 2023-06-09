<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'document' => 'required',
           'names'  =>'required',
           'email' => ['required','email']
        ]);
        Client::create($request->post());
        return redirect()->route('clients.index')
        ->with('success','Cliente creado corretamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'document' => 'required',
            'names'  =>'required',
            'email' => ['required','email']
         ]);
        $client->update($request->all());
        return redirect()->route('clients.index')
        ->with('success','Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')
        ->with('success','Cliente eliminado correctamente');
    }
}
