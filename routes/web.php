<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('generatedata', [AuthController::Class,'generatedata']);


Route::get('/', function () {
    return view('home');
})->middleware('is.auth');


Route::get('login', [AuthController::Class,'showlogin']) ->middleware('is.not.auth');
Route::post('login', [AuthController::Class,'actionlogin']) ->middleware('is.not.auth');


Route::middleware(['is.auth'])->group(function(){

    Route::get('logout', [AuthController::Class,'actionlogout']);
        
    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('stuffs', StuffController::class);
    Route::resource('transactions', TransactionController::class);

});



// Route::get('customers', [CustomerController::Class,'index']);
// Route::get('customers/create', [CustomerController::Class,'create']);
// Route::post('customers', [CustomerController::Class,'store']);
// Route::get('customers/{customer}', [CustomerController::Class,'show']);
// Route::put('customers/{customer}', [CustomerController::Class,'update']);
// Route::delete('customers/{customer}', [CustomerController::Class,'destroy']);


// Route::get('categories', [CategoryController::Class,'index']);
// Route::get('categories/create', [CategoryController::Class,'create']);
// Route::post('categories', [CategoryController::Class,'store']);
// Route::get('categories/{customer}', [CategoryController::Class,'show']);
// Route::put('categories/{customer}', [CategoryController::Class,'update']);
// Route::delete('categories/{customer}', [CategoryController::Class,'destroy']);



// Route::get('stuffs', [StuffController::Class,'index']);
// Route::get('stuffs/create', [StuffController::Class,'create']);
// Route::get('stuffs', [StuffController::Class,'store']);
// Route::get('stuffs/{stuff}', [StuffController::Class,'show']);
// Route::get('stuffs/{stuff}', [StuffController::Class,'update']);
// Route::get('stuffs/{stuff}', [StuffController::Class,'destroy']);

// Route::get('user', [UserController::Class,'index']);
// Route::get('user/add', [UserController::Class,'create']);




Route::get('detail', [DetailTransactionController::Class,'index']);






