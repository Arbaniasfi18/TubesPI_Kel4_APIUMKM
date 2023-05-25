<?php

namespace App\Http\Controllers\authController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $page_name = 'Register';
        return view('auth', [
            'page_name' => $page_name,
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
                'full_name' => 'required|string',
                'email' => 'required|email:rfc,dns|unique:App\Models\User,email',
                'password' => 'required|min:8',
        ],
        [
            'full_name.required' => 'Nama Lengkap dibutuhkan',
            'email.unique' => 'Email sudah terdaftar',
            'email.required' => 'Email dibutuhkan',
            'email.email' => 'Email harus memiliki address',
            'password.required' => 'Password dibutuhkan',
            'password.min' => 'Password minimal 8 karakter',
        ]
        );

        $dataInsert = [
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($dataInsert);

        return redirect('/login')->with('success', 'Akun anda berhasil terdaftar silahkan login'); 
    }

}
