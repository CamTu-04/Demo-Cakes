<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    return view('user');
});

use App\Http\Controllers\CakeController;

Route::resource('cakes', CakeController::class);