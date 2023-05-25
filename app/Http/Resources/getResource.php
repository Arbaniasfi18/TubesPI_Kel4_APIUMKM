<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB; 
use App\Models\Product;

class getResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function __construct($resource)
    {
       parent::__construct($resource);
    }


    public function toArray(Request $request): array
    {
        $data = $this->resource;
        $product = Product::where('usaha_id', $data->id)->get();
        return 
        [
            'id' => $data->id,
            'nama_usaha' => $data->nama_usaha,
            'logo_usaha' => $data->logo_usaha,
            'kategori_umkm' => $data->category->category,
            'deskripsi' => $data->deskripsi,
            'nama_pemilik' => $data->nama_pemilik, 
            'validitas_sertif_umkm' => $data->validitas_sertif_umkm,
            'alamat_usaha' => $data->alamat_usaha,
            'kecamatan' => $data->kecamatan->kecamatan,
            'kota' => $data->kecamatan->kota->kota,
            'contact_person' => $data->contact,
            'produk' => $product,
        ];
    }
}
