<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipts = Receipt::all();
        return view('receipts.index')->with('receipts',$receipts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Receipt $receipt)
    {
        return view('receipts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Receipt::create($request->post());
        return redirect()->route('receipts.index')
        ->with('success','Recibo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Receipt $receipt)
    {
        return view('receipts.show')->with('receipt',$receipt);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receipt $receipt)
    {
        return view('receipts.edit')->with('receipt',$receipt);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receipt $receipt)
    {
        $receipt->update($request->all());
        return redirect()->route('receipts.index')
        ->with('success','Recibo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receipt $receipt)
    {
        $receipt->delete();
        return redirect()->route('receipts.index')
        ->with('success','Recibo eliminado correctamente');
    }
}
