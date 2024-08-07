<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('auth.login');
});
Route::get('/register', function(){
    return view('auth.register');
});
Route::get('/reset-password', function(){
    return view('auth.reset_password');
});
Route::get('/new-password', function(){
    return view('auth.new_password');
});
