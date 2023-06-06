<?php

namespace App\Http\Controllers;

require 'D:\Pemrograman\HTML\Laravel\tubes_pi\front\TubesPI_Kel4_APIUMKM\vendor\mashape\unirest-php\src\Unirest.php';

use App\Models\Umkm;
use Illuminate\Http\Request;
use Unirest\Request as Req;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public static $token = 'WG6KjhkQ3ngIdPWtcdCQ';

    public function home(){
        $url2 = 'https://umkm.local.back.com/' . Self::$token . '/kecamatan';
        $res_kecamatan = Http::withoutVerifying()->get($url2);
        $kecamatan = json_decode($res_kecamatan->getBody());

        $url = 'https://umkm.local.back.com/' . Self::$token . '/umkm';
        // $url = "https://api.usu.ac.id/0.1/users";
        $response = Http::withoutVerifying()->get($url);
        $json = json_decode($response->getBody());

        if($json->code == 404)
        {
            return view('halaman.v_home');  
        }
        else
        {
            return view('halaman.v_home', [
                'total_umkm' => count($json->data),
                'daftar_kecamatan' => $kecamatan->data,
            ]);
        }

    }

    public function tentang(){
        $url2 = 'https://umkm.local.back.com/' . Self::$token . '/kecamatan';
        $res_kecamatan = Http::withoutVerifying()->get($url2);
        $kecamatan = json_decode($res_kecamatan->getBody());




        return view('halaman.v_tentang', [
            'daftar_kecamatan' => $kecamatan->data,
        ]);
    }

    public function statistik($get_kecamatan){
        $url2 = 'https://umkm.local.back.com/' . Self::$token . '/kecamatan';
        $res_kecamatan = Http::withoutVerifying()->get($url2);
        $kecamatan = json_decode($res_kecamatan->getBody());

        $explode = explode('-', $get_kecamatan);
        $implode = implode(' ', $explode);
        $capitalize = ucwords($implode);

        $url = 'https://umkm.local.back.com/' . Self::$token . '/umkm/kecamatan/' . $capitalize;
        $response = Http::withoutVerifying()->get($url);
        $data = json_decode($response->getBody());

        if(!empty($data))
        {
            $pangan = 0;
            $sandang = 0;
            $papan = 0;
            for ($i=0; $i < count($data->data); $i++) { 
                if($data->data[$i]->kategori_umkm == 'Pangan')
                {
                    $pangan+=1;
                }
                if($data->data[$i]->kategori_umkm == 'Sandang')
                {
                    $sandang+=1;
                }
                if($data->data[$i]->kategori_umkm == '')
                {
                    $papan+=1;
                }
            }

            return view('halaman.v_statistik', [
                'kecamatan' => $capitalize,
                'data_kecamatan' => $data->data,
                'daftar_kecamatan' => $kecamatan->data,
                'pangan' => $pangan,
                'sandang' => $sandang,
                'papan' => $papan,
            ]);
        }

        return view('halaman.v_statistik', [
            'kecamatan' => $capitalize,
            'daftar_kecamatan' => $kecamatan->data,
            'pangan' => 0,
            'sandang' => 0,
            'papan' => 0,
        ]);
    }

    public function database_umkm(){
        $url = 'https://umkm.local.back.com/' . Self::$token . '/umkm';
        $url2 = 'https://umkm.local.back.com/' . Self::$token . '/kecamatan';
        $response = Http::withoutVerifying()->get($url);
        $response2 = Http::withoutVerifying()->get($url2);
        $json = json_decode($response->getBody());
        $json2 = json_decode($response2->getBody());
        $umkm = $json->data;
        $kecamatan = $json2->data;

        $data = array();
        $dataa = array();

        for ($i=0; $i < count($kecamatan); $i++) 
        { 
            $pangan = 0;
            $sandang = 0;
            $papan = 0;
            for($j=0; $j < count($umkm); $j++)
            {
                if($kecamatan[$i]->kecamatan == $umkm[$j]->kecamatan)
                {
                    if($umkm[$j]->kategori_umkm == 'Pangan')
                    {
                        $pangan+=1;
                    }
                    elseif($umkm[$j]->kategori_umkm == 'Sandang')
                    {
                        $sandang+=1;
                    }
                    elseif($umkm[$j]->kategori_umkm == 'Papan')
                    {
                        $papan+=1;
                    }
                    else
                    {
                        continue;
                    }
                }
                else
                {
                    continue;
                }
            }
            $data = array(
                'id' => $i+1,
                'kecamatan' => $kecamatan[$i]->kecamatan,
                'pangan' => $pangan,
                'sandang' => $sandang,
                'papan' => $papan,
            );
            $dataa[] = $data;
        }
        
        $jumlah = array();

        for($i = 0; $i < count($kecamatan); $i++) 
        {
            // $jumlah[] = array(
            //     'kecamatan' => $kecamatan[$i]->kecamatan,
            //     'jumlah_umkm' => $dataa[$i]['sandang'] + $dataa[$i]['pangan'] + $dataa[$i]['papan'], 
            // );
            $jumlah[] = $dataa[$i]['sandang'] + $dataa[$i]['pangan'] + $dataa[$i]['papan'];
        }

        return view('halaman.v_database', [
            'daftar_kecamatan' => $kecamatan,
            'umkms' => $dataa,
            'total_umkm' => count($umkm),
            'Medan_Amplas' => $jumlah[0],
            'Medan_Area' => $jumlah[1],
            'Medan_Barat' => $jumlah[2],
            'Medan_Baru' => $jumlah[3],
            'Medan_Belawan' => $jumlah[4],
            'Medan_Deli' => $jumlah[5],
            'Medan_Denai' => $jumlah[6],
            'Medan_Helvetia' => $jumlah[7],
            'Medan_Johor' => $jumlah[8],
            'Medan_Kota' => $jumlah[9],
            'Medan_Labuhan' => $jumlah[10],
            'Medan_Maimun' => $jumlah[11],
            'Medan_Marelan' => $jumlah[12],
            'Medan_Perjuangan' => $jumlah[13],
            'Medan_Petisah' => $jumlah[14],
            'Medan_Polonia' => $jumlah[15],
            'Medan_Selayang' => $jumlah[16],
            'Medan_Sunggal' => $jumlah[17],
            'Medan_Tembung' => $jumlah[18],
            'Medan_Timur' => $jumlah[19],
            'Medan_Tuntungan' => $jumlah[20],
        ]);
    }

    public function data_umkm($id){
        $url2 = 'https://umkm.local.back.com/' . Self::$token . '/kecamatan';
        $res_kecamatan = Http::withoutVerifying()->get($url2);
        $kecamatan = json_decode($res_kecamatan->getBody());
        
        $url = 'https://umkm.local.back.com/' . Self::$token . '/umkm/id/' . $id;
        $response = Http::withoutVerifying()->get($url);
        $umkm = json_decode($response->getBody());

        return view('halaman.v_umkm', [
            'umkm' => $umkm->data,
            'daftar_kecamatan' => $kecamatan->data,
        ]);
    }

    public function detail_product($nama_umkm, $product){
        $url2 = 'https://umkm.local.back.com/' . Self::$token . '/kecamatan';
        $res_kecamatan = Http::withoutVerifying()->get($url2);
        $kecamatan = json_decode($res_kecamatan->getBody());

        $url = 'https://umkm.local.back.com/' . Self::$token . '/umkm';
        $response = Http::withoutVerifying()->get($url);
        $umkms = json_decode($response->getBody());

        foreach($umkms->data as $umkm){
            if($umkm->nama_usaha == $nama_umkm){
                $data_umkm = $umkm;
                foreach($umkm->produk as $produk){
                    if($produk->nama_produk == $product){
                        $data = $produk;
                    }
                }
            }
        }

        return view('halaman.v_detail', [
            'umkm' => $data_umkm,
            'produk' => $data,
            'daftar_kecamatan' => $kecamatan->data,
        ]);
    }
    
}