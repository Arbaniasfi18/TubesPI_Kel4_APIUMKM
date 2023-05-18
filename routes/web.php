<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ApiController;
use App\Http\Controllers\authController\LoginController;
use App\Http\Controllers\authController\RegisterController;

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

Route::controller(ApiController::class)->group(function () {
    Route::get('/test', 'Test')->name('test');
    Route::get('/test/{id}', 'getId');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');