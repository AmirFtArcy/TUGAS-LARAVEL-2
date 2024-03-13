<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    function showlogin()
    {
        
        return view('login');
    }
     function actionlogin(Request $req)
     {
        $datalogin=[
            'email' => $req ->input('email'),
            'password' => $req ->input('password'),
        ]; 
        if(Auth::attempt($datalogin)){
            return redirect('/');
        }else{
            return back();
        }
     }
     function actionlogout()
     {
        Auth::logout();
        return redirect('login');
     }
     function generatedata()
     {
        User::create([
            
            'name' => 'amir',
            'email' => 'amir@gmail.com',
            'email_verified_at' => now(),
            'password' => '1234',
            'remember_token' => Str::random(10),
        ]);
        
     }
}
