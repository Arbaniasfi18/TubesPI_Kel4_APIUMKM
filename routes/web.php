<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/statistik/{kecamatan}', 'statistik')->name('statistik');
    Route::get('/database-umkm', 'database_umkm')->name('database');
    Route::get('/data-umkm/{id}', 'data_umkn')->name('data_umkm');
});
