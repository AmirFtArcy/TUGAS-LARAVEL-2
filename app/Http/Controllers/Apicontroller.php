<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\stuff;
use Illuminate\Support\Facades\Hash;
use App\models\User;
use Illuminate\Support\Facades\Auth;


class Apicontroller extends Controller
{
    function login(request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $user = User::Where('email',$email)->first();
        if($user){
            if(Hash::check($password,$user->Password)){
                $token =$user->createtoken('user_token')->plainTextToken;
                return response()->json([
                    'token' => $token,
                    'value' => $user,
                    'mess' =>'User Ditemukan',
                    'isError' => false,
                ]);
            } else{
                return response()->json([
                    
                    'value' =>null,
                    'mess' =>'Password Salah',
                    'isError' => true,
                ]);
            } 
    }
    function auth(Request $req)
    {
        if (Auth::check()){
            $id = Auth::id();
            $user = User::findOrFail($id);
            return response()->json([
                'value' =>$user,
                'mess' =>'User  Ditemukan',
                'isError' =>false,
            ]);
        } else {
            return response()->json([
                'value' =>null,
                'mess' =>'User tidak Ditemukan',
                'isError' =>true,
            ]);
        }
    }

     function stuff (Request $req)
    {
       
        $data = stuff::all();
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
    function stuffAdd (Request $req)
    {
        $data = stuff::craete($req->all());
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
   function stuffUpdate (Request $req , Stuff $stuff )
    {
        $stuff->fill($req->all());
        $data = $stuff->save();
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
    function stuffDelete (Request $req , Stuff $stuff )
    {
        
        $data = $stuff->delete();
        return response()->json([
            'value' =>$data,
            'isError' =>false,
        ]);
    }
}
}

