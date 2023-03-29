<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Copy;
use App\Models\Receipt;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::all();
        return view('rentals.index')->with('rentals',$rentals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $receipts = Receipt::all();
        $copies = Copy::all();
        return view('rentals.create')
        ->with(['clients' => $clients,'receipts' =>$receipts,'copies' =>$copies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Rental $rental)
    {
        $rental->create($request->post());
        return redirect()->route('rentals.index')
        ->with('success','Alquiler creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        return view('rentals.show')->with('rental',$rental);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        $clients = Client::all();
        $receipts = Receipt::all();
        $copies = Copy::all();
        return view('rentals.edit')
        ->with(['rental' => $rental,'clients' =>$clients,'receipts' =>$receipts,
        'copies' =>$copies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        $rental->update($request->all());
        return redirect()->route('rentals.index')
        ->with('success','Alquiler actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')
        ->with('success','Alquiler eliminado correctamente');
    }
}
