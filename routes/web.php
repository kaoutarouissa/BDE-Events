<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('intro');});
route::get('/login',function(){ return view('login');})->name('login');
Route::get('showRegister',[RegisterController::class,'showRegister'])->name('showRegister');
Route::post('register',[RegisterController::class,'register'])->name('register');

