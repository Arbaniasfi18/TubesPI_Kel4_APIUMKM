<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ApiController;
use App\Http\Controllers\authController\LoginController;
use App\Http\Controllers\authController\RegisterController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->controller(ApiController::class)->group(function () {
    Route::get('/test', 'Test')->name('test');
    Route::get('/test/{id}', 'getId');
});

Route::prefix('login')->controller(LoginController::class)->group(function(){
    Route::get('/', 'index')->name('login');
    Route::post('/post', 'create')->name('login.post');
});


Route::prefix('register')->controller(RegisterController::class)->group(function(){
    Route::get('/', 'index')->name('register');
    Route::post('/post', 'create')->name('register.post');
});

Route::get('/logout', function(){
    Auth::logout();
});