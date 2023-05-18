<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = 
        [
            [
                'id' => 1,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Amplas',
            ],
            [
                'id' => 2,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Area',
            ],
            [
                'id' => 3,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Barat',
            ],
            [
                'id' => 4,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Baru',
            ],
            [
                'id' => 5,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Belawan',
            ],
            [
                'id' => 6,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Deli',
            ],
            [
                'id' => 7,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Denai',
            ],
            [
                'id' => 8,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Helvetia',
            ],
            [
                'id' => 9,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Johor',
            ],
            [
                'id' => 10,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Kota',
            ],
            [
                'id' => 11,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Labuhan',
            ],
            [
                'id' => 12,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Maimun',
            ],
            [
                'id' => 13,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Marelan',
            ],
            [
                'id' => 14,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Perjuangan',
            ],
            [
                'id' => 15,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Petisah',
            ],
            [
                'id' => 16,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Polonia',
            ],
            [
                'id' => 17,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Selayang',
            ],
            [
                'id' => 18,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Sunggal',
            ],
            [
                'id' => 19,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Tembung',
            ],
            [
                'id' => 20,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Timur',
            ],
            [
                'id' => 21,
                'kota_id' => 1,
                'Kecamatan' => 'Medan Tuntungan',
            ],
        ];

        DB::table('kecamatans')->insert($data);

    }
}
