<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){return "hai";});

Route::get('/dashboard', function(){
    return view('dashboard');
});

