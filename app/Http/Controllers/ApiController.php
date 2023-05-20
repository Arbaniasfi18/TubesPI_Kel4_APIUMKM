<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Http\Resources\getResource;
use Illuminate\Support\Str;
use App\Models\Token;

class ApiController extends Controller
{
    public function Test(Request $request)
    {
        $data = getResource::collection(Umkm::all());

        // dd($request->session()->has('users'));

        if($data != Null){
            $response = array(
                'status' => 200,
                'message' => 'Berhasil GET data',
                'data' => $data,
            );
            header('Content-Type: application/json');
            return $response;   
        }

        return abort(404);
    }

    public function getId($id)
    {
        $data = new getResource(Umkm::findOrFail($id));

        if($data != Null){
            $response = array(
                'status' => 200,
                'message' => 'Berhasil GET data',
                'data' => $data,
            );
            header('Content-Type: application/json');
            return $response;
        }

        return abort(404);
    }

    public function createToken(Request $request)
    {
        $check_token = Token::where([
            ['user_id', '=', auth()->user()->id],
            ['end_date', '>', \Carbon\Carbon::now()],
        ])->first();

        $next_month = \Carbon\Carbon::now()->addMonth();

        if(!empty($check_token))
        {
            return view('auth', [
                'token' => $check_token->token,
                'page_name' => 'Token'
            ]);
        }
        else 
        {
            $token = Str::random(20);
            $data = [
                'user_id' => auth()->user()->id,
                'token' => $token,
                'end_date' => $next_month,
            ];
            Token::create($data);
        }
        return view('auth', [
            'token' => $token,
            'page_name' => 'Token'
        ]);
    }


}
