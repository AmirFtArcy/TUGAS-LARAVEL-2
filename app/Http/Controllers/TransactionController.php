<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\stuff;
use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::with(['customer','user'])->get();
       
        return view('transaction.list',[
            'data' => $transaction,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stuff = Stuff::all();
        return view('transaction.add',[
            'stuff' => $stuff ,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretransactionRequest $request)
    {
        transaction::create($request->all());
        return redirect('/transactions')->with([
            'pes'=>'Data sudah tersimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(transaction $transaction)
    {
        return view('transaction.add',[
            'data' =>$transaction,
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransactionRequest $request, transaction $transaction)
    {
          
        $transaction->fill($request->all());
        $transaction->save();
        return redirect('/transactions')->with([
            'pes'=>'Data sudah tersimpan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaction $transaction)
    {
        $transaction->delete();
        return redirect('/transactions')->with([
            'pes'=>'Data sudah terhapus',
        ]);
    }
}
