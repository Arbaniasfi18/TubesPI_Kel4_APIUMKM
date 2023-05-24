<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Http\Resources\getResource;
use App\Http\Resources\KecamatanResource;
use App\Models\Kecamatan;
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
            return response()->json($response);   
        }

        return abort(404);
    }

    public function getId($token, $id)
    {
        $token_data = Token::where('token', $token)->first();
        if(!empty($token_data))
        {
            if($token_data->end_date > \Carbon\Carbon::now())
            {
                $data = Umkm::findOrFail($id);
                $response = array(
                    'code' => 200,
                    'message' => 'Success get data',
                    'data' => new getResource($data)
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
            else
            {
                $response = array(
                    'code' => 503,
                    'message' => 'Service unavailable',
                    'data' => 'No data, Token Expirate'
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
        }
        else
        {
            $response = array(
                'code' => 404,
                'message' => 'Not Found',
                'data' => 'Token not found'
            );
            header('Content-Type: application/json');
            return response()->json($response);
        }
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

    public function getAll($token)
    {
        $token_data = Token::where('token', $token)->first();
        if(!empty($token_data))
        {
            if($token_data->end_date > \Carbon\Carbon::now())
            {
                $data = Umkm::get();
                $response = array(
                    'code' => 200,
                    'message' => 'Success get data',
                    'data' => getResource::collection($data)
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
            else
            {
                $response = array(
                    'code' => 503,
                    'message' => 'Service unavailable',
                    'data' => 'No data, Token Expirate'
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
        }
        else
        {
            $response = array(
                'code' => 404,
                'message' => 'Not Found',
                'data' => 'Token not found'
            );
            header('Content-Type: application/json');
            return response()->json($response);
        }
    }

    public function getCategory($token, $category) 
    {
        $token_data = Token::where('token', $token)->first();
        if(!empty($token_data))
        {
            if($token_data->end_date > \Carbon\Carbon::now())
            {
                $cat_id = 0;
                if($category == 'pangan')
                {
                    $cat_id = 1;
                }
                if($category == 'sandang')
                {
                    $cat_id = 2;
                }
                if($category == 'papan')
                {
                    $cat_id = 3;
                }

                $umkm = Umkm::where('category_id', $cat_id)->get();
                $response = array(
                    'code' => 200,
                    'message' => 'OK',
                    'data' => getResource::collection($umkm)
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
            else
            {
                $response = array(
                    'code' => 503,
                    'message' => 'Service unavailable',
                    'data' => 'No data, Token Expirate'
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
        }
        else
        {
            $response = array(
                'code' => 404,
                'message' => 'Not Found',
                'data' => 'Token not found'
            );
            header('Content-Type: application/json');
            return response()->json($response);
        }
    }

    public function allKecamatan($token)
    {
        $token_data = Token::where('token', $token)->first();
        if(!empty($token_data))
        {
            if($token_data->end_date > \Carbon\Carbon::now())
            {
                $data = Kecamatan::get();
                $response = array(
                    'code' => 200,
                    'message' => 'Success get data',
                    'data' => KecamatanResource::collection($data)
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
            else
            {
                $response = array(
                    'code' => 503,
                    'message' => 'Service unavailable',
                    'data' => 'No data, Token Expirate'
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
        }
        else
        {
            $response = array(
                'code' => 404,
                'message' => 'Not Found',
                'data' => 'Token not found'
            );
            header('Content-Type: application/json');
            return response()->json($response);
        }
    }

    public function umkmInKecamatan($token, $kecamatan)
    {
        $token_data = Token::where('token', $token)->first();
        if(!empty($token_data))
        {
            if($token_data->end_date > \Carbon\Carbon::now())
            {
                $explode = explode('-', $kecamatan);
                $implode = implode(' ', $explode);
                $capitalize = ucwords($implode);
                $get_kecamatan = Kecamatan::where('kecamatan', $capitalize)->firstOrFail();
                if(!empty($get_kecamatan))
                {
                    Umkm::where('kecamatan_id', $get_kecamatan->id)->firstOrFail();
                    $data = Umkm::where('kecamatan_id', $get_kecamatan->id)->get();
                    if($data != [])
                    {
                        $response = array(
                            'code' => 200,
                            'message' => 'OK',
                            'data' => getResource::collection($data),
                        );
                        header('Content-Type: application/json');
                        return response()->json($response);
                    }
                    else
                    {
                        $response = array(
                            'code' => 404,
                            'message' => 'Not Found',
                            'data' => 'Token not found'
                        );
                        header('Content-Type: application/json');
                        return response()->json($response);
                    }
                }
                else
                {
                    $response = array(
                        'code' => 404,
                        'message' => 'Not Found',
                        'data' => 'Token not found'
                    );
                    header('Content-Type: application/json');
                    return response()->json($response);
                }
            }
            else
            {
                $response = array(
                    'code' => 503,
                    'message' => 'Service unavailable',
                    'data' => 'No data, Token Expirate'
                );
                header('Content-Type: application/json');
                return response()->json($response);
            }
        }
        else
        {
            $response = array(
                'code' => 404,
                'message' => 'Not Found',
                'data' => 'Token not found'
            );
            header('Content-Type: application/json');
            return response()->json($response);
        }
    }

}
