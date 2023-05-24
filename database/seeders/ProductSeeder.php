<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'usaha_id' => 1,
                'nama_produk' => 'Sepatu',
                'gambar_produk' => '-',
                'harga' => 150000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 1,
                'nama_produk' => 'Kain Songket',
                'gambar_produk' => '-',
                'harga' => 80000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 2,
                'nama_produk' => 'Markisa',
                'gambar_produk' => '-',
                'harga' => 15000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 3,
                'nama_produk' => 'Emping',
                'gambar_produk' => '-',
                'harga' => 20000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 4,
                'nama_produk' => 'Kaligrafi Islam Alumunium',
                'gambar_produk' => '-',
                'harga' => 750000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 5,
                'nama_produk' => 'Taplak Meja',
                'gambar_produk' => '-',
                'harga' => 450000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 6,
                'nama_produk' => 'Sepatu Bot Anak',
                'gambar_produk' => '-',
                'harga' => 150000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 7,
                'nama_produk' => 'Tas Kulit Buaya',
                'gambar_produk' => '-',
                'harga' => 1000000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 8,
                'nama_produk' => 'Kalung persada tenun',
                'gambar_produk' => '-',
                'harga' => 200000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 9,
                'nama_produk' => 'Tas Rantai Size M',
                'gambar_produk' => '-',
                'harga' => 175000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 10,
                'nama_produk' => 'Kaos',
                'gambar_produk' => '-',
                'harga' => 85000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 11,
                'nama_produk' => 'Pancake',
                'gambar_produk' => '-',
                'harga' => 6000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 12,
                'nama_produk' => 'Sarung Bantal Kursi',
                'gambar_produk' => '-',
                'harga' => 450000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 13,
                'nama_produk' => 'Bika Ambon Pandan ',
                'gambar_produk' => '-',
                'harga' => 36000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 13,
                'nama_produk' => 'Bika Ambon Moca',
                'gambar_produk' => '-',
                'harga' => 68000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'usaha_id' => 14,
                'nama_produk' => 'Sepatu Sequrity',
                'gambar_produk' => '-',
                'harga' => 350000,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            
        ];
    }
}
