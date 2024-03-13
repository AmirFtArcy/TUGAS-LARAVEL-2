<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('kategori.list',[
            'data'=> $categories,
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('kategori.add');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoryRequest $request)
    {
        Category::create($request->all());
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        
        return view('kategori.add',[
            'data' =>$category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        
        $category->fill($request->all());
        $category->save();
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {

        $category->delete();
        return redirect('/categories');
    }
}
