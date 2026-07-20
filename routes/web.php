<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('intro');
});
route::get('/login',function(){
return view('login');}      )->name('login');
