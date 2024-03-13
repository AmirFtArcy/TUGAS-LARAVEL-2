<?php

namespace App\Http\Controllers;

use App\Models\stuff;
use App\Http\Requests\StorestuffRequest;
use App\Http\Requests\UpdatestuffRequest;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $stuffs = Stuff::with(['category','detail'])->get();
        return view('barang.list',[
            'data' => $stuffs,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.add');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestuffRequest $request)
    {
        
        Stuff::create($request->all());
        return redirect('/stuffs');
    }

    /**
     * Display the specified resource.
     */
    public function show(stuff $stuff)
    {
        return view('barang.add',[
            'data' =>$stuff,
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stuff $stuff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestuffRequest $request, stuff $stuff)
    {
        
        $stuff->fill($request->all());
        $stuff->save();
        return redirect('/stuffs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stuff $stuff)
    {
        
        $stuff->delete();
        return redirect('/stuffs');
    }
}
