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
        $data = [
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);

        return redirect('/login'); 
    }

}
