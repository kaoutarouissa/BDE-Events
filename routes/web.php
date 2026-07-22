<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('intro');})->name('intro');
route::get('/login',function(){ return view('login');})->name('login');
Route::post('/login', [LoginController::class, 'index'])->name('login.post');
Route::get('showRegister',[RegisterController::class,'showRegister'])->name('showRegister');
Route::post('register',[RegisterController::class,'register'])->name('register');
Route::get('/BDE_Dashboard',function(){return view('BDE');})->name('bde-dacshboard');
Route::get('/Étudiant_Dashboard',function(){return view('Etudiant');})->name('Étudiant-dacshboard');
Route::post('/reservation/{reservation}',[ReservationController::class,'create'])->name('create-reservation');


