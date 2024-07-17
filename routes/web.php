<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

 Route::get('/register',[RegisterController::class,'index']);
 Route::post('/register',[RegisterController::class,'register']);

 Route::get('/register/view',[RegisterController::class,'printData']);

 Route::get('/register/delete/{id}',[RegisterController::class,'deleteData']);
 Route::get('/register/edit/{id}',[RegisterController::class,'edits']);
 Route::post('/register/update/{id}',[RegisterController::class,'update']);
