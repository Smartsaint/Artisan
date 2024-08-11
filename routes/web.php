<?php

use App\Http\Controllers\Admin\V1\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('pages.blogs');
});


Route::get('/system/home', [HomeController::class, 'home']);