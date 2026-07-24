<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('intro');})->name('intro');
route::get('/login',function(){ return view('login');})->name('login');
Route::post('/login', [LoginController::class, 'index'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('showRegister',[RegisterController::class,'showRegister'])->name('showRegister');
Route::post('register',[RegisterController::class,'register'])->name('register');



Route::get('/BDE_Dashboard', [EventController::class, 'index'])->middleware('bde')
    ->name('bde-dashboard');
Route::post('/event',[EventController::class,'store'])->middleware('bde')->name('store-event');
Route::get('/events/create', [EventController::class, 'store'])->middleware('bde')
    ->name('events.create');



Route::get('/Etudiant_Dashboard/events',[EventController::class,'show'])->middleware('etudiant')->name('etudiant-dashboard');
Route::post('/reserver',[ReservationController::class,'create'])->middleware('etudiant')->name('reserver');
// Route::get('/showReservation',[ReservationController::class,'show'])->name('showRservation');