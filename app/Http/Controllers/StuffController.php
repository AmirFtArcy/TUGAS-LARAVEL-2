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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestuffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(stuff $stuff)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stuff $stuff)
    {
        //
    }
}
