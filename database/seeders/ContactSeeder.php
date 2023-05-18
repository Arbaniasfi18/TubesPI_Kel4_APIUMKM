<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = 
        [
            [
                'no_telp' => '0821-6066-3388',
                'instagram' => 'maharanigaleri',
                'whatsapp' => '-',
                'facebook' => 'Maharani Galeri',
                'website' => '-',
                'email' => '-',
                'twitter' => '-',
            ],
            [
                'no_telp' => '061-4554394',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => 'www.markisanorlen.com',
                'email' => 'norlensyrup@yahoo.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0852-6106-5083',
                'instagram' => '-',
                'whatsapp' => '0852-6106-5083',
                'facebook' => '-',
                'website' => '-',
                'email' => 'sujiaenak@gmail.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0852-6145-6145',
                'instagram' => '-',
                'whatsapp' => '0852-6145-6145',
                'facebook' => '-',
                'website' => '-',
                'email' => '-',
                'twitter' => '-',
            ],
            [
                'no_telp' => '061-4554475',
                'instagram' => 'delimayasari',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => '-',
                'email' => 'delimayasarihandicraft@gmail.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '-',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => '-',
                'email' => 'siti_rohana49@yahoo.co.id',
                'twitter' => '-',
            ],
            [
                'no_telp' => '-',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => 'Lidya Panggabean',
                'website' => '-',
                'email' => 'asima.murni@gmail.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0821-6808-3829',
                'instagram' => 'persadatenun',
                'whatsapp' => '-',
                'facebook' => 'Nikaroku',
                'website' => '-',
                'email' => '-',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0823-6341-1719',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => "Mom's Craft And Boutique",
                'website' => '-',
                'email' => 'momscraft174@gmail.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0821-6841-8246',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => 'Abu Humaidy Nasution',
                'website' => '-',
                'email' => 'abuhumaidiy',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0852-7092-9948',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => '-',
                'email' => '-',
                'twitter' => '-',
            ],
            [
                'no_telp' => '-',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => '-',
                'email' => 'putripanggabean@gmail.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0823-6070-0638',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => '-',
                'email' => 'bikaambonzulaikha03@gmail.com',
                'twitter' => '-',
            ],
            [
                'no_telp' => '0852-6164-9765',
                'instagram' => '-',
                'whatsapp' => '-',
                'facebook' => '-',
                'website' => '-',
                'email' => 'azri.smakse@yahoo.com',
                'twitter' => '-',
            ],
        ];

        DB::table('contact_people')->insert($data);

    }
}
