<?php

use App\Http\Controllers\Admin\V1\HomeController;
use App\Http\Controllers\Admin\V1\RolesController;
use App\Http\Controllers\Admin\V1\SiteSettingsController;
use App\Http\Controllers\Admin\V1\UsersController;
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



Route::group([
    'prefix' => 'system',
    'as' => 'system.',
    // 'middleware' => ['auth'],    // Apply authentication middleware
], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    // site settings
    Route::get('/settings', [SiteSettingsController::class, 'index'])->name('settings');

    // roles and permission
    Route::resource('/roles', RolesController::class);

    //users
    Route::resource('users', UsersController::class);
    // Route::get('user', [UsersController::class, 'show'])->name('user');
});
