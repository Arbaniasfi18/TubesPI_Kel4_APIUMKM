<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/Tentang',[App\Http\Controllers\HomeController::class,'tentang'])->name('tentang');
Route::get('/Statistik',[App\Http\Controllers\HomeController::class,'statistik'])->name('statistik');
Route::get('/Database-UMKM',[App\Http\Controllers\HomeController::class,'database_umkm'])->name('database');
Route::get('/Data-UMKM',[App\Http\Controllers\HomeController::class,'data_umkn'])->name('data_umkm');
