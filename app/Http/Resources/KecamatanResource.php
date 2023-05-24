<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KecamatanResource extends JsonResource
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
        return 
        [
            'id' => $data->id,
            'kota' => $data->kota->kota,
            'kecamatan' => $data->kecamatan,
        ];
    }
}
