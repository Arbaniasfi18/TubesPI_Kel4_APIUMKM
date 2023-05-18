<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'nama_usaha' => 'Maharani Collection',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Hj. Rita Maharani',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Sei Bekala No. 12',
                'contact_id' => 1,
                'kecamatan_id' => 4,
            ],
            [
                'id' => 2,
                'nama_usaha' => 'Markisa Noerlen',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Pangan',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Hj. Noerlen',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Sei Tuan No. 7',
                'contact_id' => 2,
                'kecamatan_id' => 4,
            ],
            [
                'id' => 3,
                'nama_usaha' => 'Jiane Snack',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Pangan',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Jiane Han',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Elang Komp. KPB No. B22',
                'contact_id' => 3,
                'kecamatan_id' => 18,
            ],
            [
                'id' => 4,
                'nama_usaha' => 'Irgie Kaligrafi',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Papan',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Pujiati',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan SMA 2 Polonia',
                'contact_id' => 4,
                'kecamatan_id' => 16,
            ],
            [
                'id' => 5,
                'nama_usaha' => 'Deli Mayasari Handycraft',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Deli Mayasari',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan K.L. Yos Sudarso',
                'contact_id' => 5,
                'kecamatan_id' => 3,
            ],
            [
                'id' => 6,
                'nama_usaha' => 'Wisata Kreasi',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Siti Rohana',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Tuar Komplek Astra Blok No.39',
                'contact_id' => 6,
                'kecamatan_id' => 1,
            ],
            [
                'id' => 7,
                'nama_usaha' => 'Lidya Collection',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Asima Lidya Murni',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Bilal Ujung No.169 Pulo Brayan',
                'contact_id' => 7,
                'kecamatan_id' => 20,
            ],
            [
                'id' => 8,
                'nama_usaha' => 'Persada Tenun',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Nikaroku',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Binga Nicole No.19',
                'contact_id' => 8,
                'kecamatan_id' => 21,
            ],
            [
                'id' => 9,
                'nama_usaha' => 'Mom Craft & Boutique',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => '-',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Komplek Pondok Surya Blok 4 No.136',
                'contact_id' => 9,
                'kecamatan_id' => 8,
            ],
            [
                'id' => 10,
                'nama_usaha' => 'Fizz id',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Abu Hamidiy Nst',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Ir. H. Juanda baru No.85',
                'contact_id' => 10,
                'kecamatan_id' => 12,
            ],
            [
                'id' => 11,
                'nama_usaha' => 'Ququm Frozen Foods',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Pangan',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Qoqom',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Kawat VII Komp. Graha Aluminium Blok B 26A',
                'contact_id' => 11,
                'kecamatan_id' => 6,
            ],
            [
                'id' => 12,
                'nama_usaha' => 'Putri Gabe',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => '-',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Tuba III No.19',
                'contact_id' => 12,
                'kecamatan_id' => 7,
            ],
            [
                'id' => 13,
                'nama_usaha' => 'Bika Ambon Zulaikha',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Pangan',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => 'Hj. Zulaikha',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Mojopahit No.70 A-C',
                'contact_id' => 13,
                'kecamatan_id' => 15,
            ],
            [
                'id' => 14,
                'nama_usaha' => 'CV. Kotama',
                'logo_usaha' => 'Hello',
                'kategori_umkm' => 'Sandang',
                'deskripsi' => 'Blabla',
                'nama_pemilik' => '-',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan HM Joni Gg. Keluarga No.08',
                'contact_id' => 14,
                'kecamatan_id' => 10,
            ],
        ];

        DB::table('umkms')->insert($data);
    }
}
