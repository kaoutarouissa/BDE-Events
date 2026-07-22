<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('intro');});
route::get('/login',function(){ return view('login');})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('showRegister',[RegisterController::class,'showRegister'])->name('showRegister');
Route::post('register',[RegisterController::class,'register'])->name('register');

