<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Http\Resources\getResource;

class ApiController extends Controller
{
    public function Test(Request $request)
    {
        $data = getResource::collection(Umkm::all());

        dd($request->session()->all());
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

    public function createToken()
    {
        
    }


}
