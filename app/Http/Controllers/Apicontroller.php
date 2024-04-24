<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\stuff;

class Apicontroller extends Controller
{
    public function stuff (Request $req)
    {
        $data = stuff::all();
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
    public function stuffAdd (Request $req)
    {
        $data = stuff::craete($req->all());
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
    public function stuffUpdate (Request $req , Stuff $stuff )
    {
        $stuff->fill($req->all());
        $data = $stuff->save();
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
    public function stuffDelete (Request $req , Stuff $stuff )
    {
        
        $data = $stuff->delete();
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
}
