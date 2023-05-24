<?php

namespace App\Http\Controllers\authController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index()
    {
        $page_name = 'Login';
        return view('auth', [
            'page_name' => $page_name,
        ]);
    }

    public function create(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(!User::where('email', $request->email)->first())
        {
            return redirect()->back()->with('error', 'Akun anda belum terdaftar');
        }
        if(Auth::attempt($data))
        {
            $request->session()->regenerate();

            return redirect('/get/token');
        }
        else
        {
            return redirect()->back()->with('error', 'Email atau Password salah');
        }
    }

}
