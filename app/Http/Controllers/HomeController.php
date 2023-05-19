<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         return view('halaman.v_home');
    }

    public function tentang(){
        return view('halaman.v_tentang');
   }

   public function statistik(){
    return view('halaman.v_statistik');
    }

    public function database_umkm(){
        return view('halaman.v_database');
    }

    public function data_umkn(){
        return view('halaman.v_umkm');
    }
    
}
