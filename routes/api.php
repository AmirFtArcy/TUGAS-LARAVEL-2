<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::get('/stuffs', [Apicontroller::Class,'stuffs']);
Route::post('/stuffs', [Apicontroller::Class,'stuffAdd']);
Route::put('/stuffs/{stuff}', [Apicontroller::Class,'stuffUdate']);
Route::delete('/stuffs/{stuff}', [Apicontroller::Class,'stuffDelete']);

