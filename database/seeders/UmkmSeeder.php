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
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/1/maharani.jpg',
                'category_id' => 2,
                'deskripsi' => 'UMKM Maharani Collection adalah sebuah toko yang menawarkan beragam kain songket dan barang khas tradisional lainnya. Toko ini merupakan destinasi yang sempurna bagi pecinta budaya dan kerajinan tradisional Indonesia. Dengan keahlian dan kecintaan terhadap warisan budaya, Maharani Collection berkomitmen untuk memperkenalkan serta melestarikan keindahan kain songket dan barang khas tradisional Indonesia kepada pelanggan.
                Maharani Collection menawarkan berbagai jenis kain songket, termasuk yang berasal dari berbagai daerah di Indonesia. Setiap kain songket memiliki karakteristik unik dan motif yang khas dari daerah asalnya, mencerminkan kekayaan budaya Indonesia. Pelanggan dapat memilih kain songket yang sesuai dengan preferensi mereka, baik untuk keperluan pribadi maupun untuk hadiah yang istimewa.
                ',
                'nama_pemilik' => 'Hj. Rita Maharani',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Sei Bekala No. 12',
                'contact_id' => 1,
                'kecamatan_id' => 4,
            ],
            [
                'id' => 2,
                'nama_usaha' => 'Markisa Noerlen',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/2/noerlen.jpg',
                'category_id' => 1,
                'deskripsi' => 'UMKM Markisa Noerlen, didirikan pada tahun 2010, adalah sebuah toko yang mengkhususkan dalam menjual aneka sirup markisa yang segar dan lezat. Markisa Noerlen menawarkan berbagai variasi sirup markisa, mulai dari sirup markisa murni yang segar hingga sirup markisa dengan rasa tambahan seperti jeruk, nanas, atau mint untuk memberikan sentuhan unik pada minuman favorit Anda. Kelezatan sirup markisa yang disediakan oleh Markisa Noerlen cocok untuk dinikmati sebagai minuman penyegar di siang hari atau sebagai bahan dasar dalam kreasi minuman dan makanan lainnya',
                'nama_pemilik' => 'Hj. Noerlen',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Sei Tuan No. 7',
                'contact_id' => 2,
                'kecamatan_id' => 4,
            ],
            [
                'id' => 3,
                'nama_usaha' => 'Jiane Snack',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/3/jianejpg.jpg',
                'category_id' => 1,
                'deskripsi' => 'UMKM Jiane Snack didirikan pada tahun 2015 dengan semangat untuk menyajikan snack olahan rumah yang lezat dan berkualitas tinggi. Sebagai toko yang mengutamakan rasa dan kualitas, Jiane Snack telah menjadi tujuan favorit bagi pecinta camilan yang ingin menikmati hidangan yang dibuat dengan cinta dan perhatian seperti di rumah sendiri.
                Toko ini menawarkan berbagai pilihan snack olahan rumah, mulai dari keripik, kue-kue kering, camilan manis, hingga makanan gurih. Setiap produk dibuat dengan penuh dedikasi dan rasa kreativitas, sehingga pelanggan dapat menemukan berbagai hidangan unik yang cocok untuk dinikmati sendiri, bersama keluarga, atau di acara khusus
                ',
                'nama_pemilik' => 'Jiane Han',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Elang Komp. KPB No. B22',
                'contact_id' => 3,
                'kecamatan_id' => 18,
            ],
            [
                'id' => 4,
                'nama_usaha' => 'Irgie Kaligrafi',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/4/irgie.jpg',
                'category_id' => 3,
                'deskripsi' => "UMKM Kaligrafi Islam Aluminium didirikan pada tahun 2012 dengan visi untuk menyediakan kaligrafi islami yang indah dan berkualitas tinggi menggunakan bahan aluminium. Desain kaligrafi yang ditawarkan mencakup berbagai gaya dan motif, mulai dari kaligrafi Ayat Al-Qur'an, Asmaul Husna, hingga kutipan-kutipan inspiratif dari hadis dan perkataan ulama terkenal.
                Kaligrafi Islam Aluminium juga menawarkan opsi personalisasi, di mana pelanggan dapat meminta kaligrafi dengan nama atau kalimat khusus yang ingin mereka sampaikan
                ",
                'nama_pemilik' => 'Pujiati',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan SMA 2 Polonia',
                'contact_id' => 4,
                'kecamatan_id' => 16,
            ],
            [
                'id' => 5,
                'nama_usaha' => 'Deli Mayasari Handycraft',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/5/delimayasari.jpg',
                'category_id' => 2,
                'deskripsi' => 'UMKM Deli Mayasari Handycraft didirikan pada tahun 2010 dengan tujuan untuk menyediakan berbagai produk kerajinan tangan unik dan berkualitas tinggi Deli Mayasari Handycraft menawarkan beragam produk kerajinan tangan yang diproduksi dengan menggunakan berbagai teknik dan bahan. Mulai dari anyaman, rajutan, hiasan dinding, hingga aksesoris dan perhiasan. Bahan-bahan berkualitas tinggi, seperti rotan, kain, kayu, dan bahan alami lainnya digunakan dalam pembuatan produk, memberikan daya tahan dan keindahan yang tahan lama.',
                'nama_pemilik' => 'Deli Mayasari',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan K.L. Yos Sudarso',
                'contact_id' => 5,
                'kecamatan_id' => 3,
            ],
            [
                'id' => 6,
                'nama_usaha' => 'Wisata Kreasi',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/6/wisata.jpg',
                'category_id' => 2,
                'deskripsi' => 'UMKM Wisata Kreasi adalah sebuah toko yang menawarkan berbagai produk kreasi kerajinan buatan sendiri yang unik dan kreatif. Dari dekorasi rumah, aksesori fashion, hingga hadiah khusus, setiap produk dijual di toko ini merupakan hasil kreasi yang unik dan orisinal. Bahan-bahan berkualitas tinggi, seperti kain, kertas, kayu, logam, dan bahan-bahan alami lainnya digunakan dalam pembuatan produk, menciptakan kerajinan yang berkualitas dan tahan lama',
                'nama_pemilik' => 'Siti Rohana',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Tuar Komplek Astra Blok No.39',
                'contact_id' => 6,
                'kecamatan_id' => 1,
            ],
            [
                'id' => 7,
                'nama_usaha' => 'Lidya Collection',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/7/lidya.jpg',
                'category_id' => 2,
                'deskripsi' => 'UMKM Lidya Collection adalah sebuah toko yang mengkhususkan diri dalam menjual tas kulit berkualitas tinggi. Berdiri sejak tahun 2015, Lidya Collection menawarkan berbagai macam tas kulit yang dirancang dengan gaya yang trendi dan keahlian yang teliti. Setiap tas diproduksi dengan menggunakan kulit berkualitas tinggi, dengan perhatian terhadap detail dalam setiap tahap pembuatan. Desain tas yang ditawarkan mencakup berbagai gaya dan model, mulai dari tas tangan, tas selempang, hingga tas ransel dan tas jinjing. Pelanggan dapat menemukan pilihan yang sesuai dengan gaya dan kebutuhan mereka',
                'nama_pemilik' => 'Asima Lidya Murni',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Bilal Ujung No.169 Pulo Brayan',
                'contact_id' => 7,
                'kecamatan_id' => 20,
            ],
            [
                'id' => 8,
                'nama_usaha' => 'Persada Tenun',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/8/persada.jpg',
                'category_id' => 2,
                'deskripsi' => 'Toko UMKM Persada Tenun Nikoraku adalah sebuah toko yang menawarkan berbagai macam produk tenun yang indah dan unik. Berlokasi di sebuah kota kecil yang kaya akan warisan budaya, toko ini menjadi tujuan favorit bagi pecinta kerajinan tangan dan penggemar tenun tradisional.
                Dengan visi untuk melestarikan keindahan tenun Indonesia, toko UMKM Persada Tenun Nikoraku menawarkan karya-karya tenun yang dibuat dengan tangan oleh pengrajin lokal yang berbakat. Setiap produk tenun yang dipamerkan di toko ini merupakan hasil dari upaya yang teliti dan dedikasi yang tinggi untuk menjaga kualitas dan keaslian karya tradisional.
                Selain menawarkan produk-produk tenun yang menakjubkan, toko UMKM Persada Tenun Nikoraku juga bertujuan untuk mendukung dan meningkatkan taraf hidup komunitas pengrajin lokal. Dengan membeli produk dari toko ini, pelanggan turut berkontribusi dalam menjaga warisan budaya dan memberdayakan pengrajin lokal untuk mencapai keberlanjutan ekonomi
                ',
                'nama_pemilik' => 'Nikaroku',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Binga Nicole No.19',
                'contact_id' => 8,
                'kecamatan_id' => 21,
            ],
            [
                'id' => 9,
                'nama_usaha' => 'Mom Craft & Boutique',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/9/mom.jpg',
                'category_id' => 2,
                'deskripsi' => 'Toko UMKM Mom Craft and Boutique adalah sebuah toko yang menawarkan berbagai produk kerajinan tangan dan barang-barang unik dengan sentuhan keibuan. 
                Salah satu hal yang membedakan Mom Craft and Boutique adalah penawaran mereka untuk menerima pesanan kustom. Pelanggan memiliki kesempatan untuk meminta produk yang dipersonalisasi sesuai dengan preferensi mereka, mulai dari warna, desain, hingga ukuran. Ini memberikan pengalaman belanja yang unik dan membuat setiap pelanggan merasa istimewa.
                Selain menjual produk-produk berkualitas, Mom Craft and Boutique juga berkomitmen untuk mendukung komunitas lokal. Mereka bekerja sama dengan pengrajin lokal dan ibu-ibu yang berbakat, memberikan platform bagi mereka untuk memamerkan dan menjual karya mereka. Dengan mendukung toko ini, pelanggan juga turut berkontribusi dalam memajukan ekonomi lokal dan memberdayakan perempuan yang berbakat',
                'nama_pemilik' => '-',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Komplek Pondok Surya Blok 4 No.136',
                'contact_id' => 9,
                'kecamatan_id' => 8,
            ],
            [
                'id' => 10,
                'nama_usaha' => 'Fizz id',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/10/fizz.jpg',
                'category_id' => 2,
                'deskripsi' => 'Toko UMKM Fizz.id adalah destinasi utama bagi pecinta kaos dengan desain yang terinspirasi oleh wisata daerah. Dengan semangat untuk mempromosikan keindahan dan keunikan setiap daerah di Indonesia, toko ini menawarkan berbagai koleksi kaos dengan desain yang kreatif dan mencerminkan kebudayaan lokal.
                Keunikan toko Fizz.id terletak pada desain-desain khusus yang mereka tawarkan. Setiap desain kaos dipikirkan dengan seksama, menggambarkan ikon wisata, keindahan alam, budaya lokal, atau kuliner khas dari suatu daerah. Desain tersebut mencerminkan identitas unik setiap tempat, memungkinkan orang untuk membawa potongan keindahan daerah tersebut dalam bentuk kaos yang stylish.
                ',
                'nama_pemilik' => 'Abu Hamidiy Nst',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Ir. H. Juanda baru No.85',
                'contact_id' => 10,
                'kecamatan_id' => 12,
            ],
            [
                'id' => 11,
                'nama_usaha' => 'Ququm Frozen Foods',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/11/qoqom.jpg',
                'category_id' => 1,
                'deskripsi' => 'Toko UMKM Putri Gabe adalah surga bagi pecinta aksesoris dan suvenir homemade. 
                Selain aksesoris, Putri Gabe juga menawarkan berbagai pilihan suvenir homemade. Dari gantungan kunci, mug, tas, hingga tempat pensil, setiap suvenir memiliki ciri khasnya sendiri dan terbuat dengan keahlian tangan yang tinggi. Suvenir ini seringkali mencerminkan budaya lokal, keindahan alam, atau elemen khas dari suatu daerah, sehingga menjadi kenang-kenangan yang istimewa bagi para pelanggan.
                ',
                'nama_pemilik' => 'Qoqom',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Kawat VII Komp. Graha Aluminium Blok B 26A',
                'contact_id' => 11,
                'kecamatan_id' => 6,
            ],
            [
                'id' => 12,
                'nama_usaha' => 'Putri Gabe',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/12/putri.jpg',
                'category_id' => 2,
                'deskripsi' => 'Toko UMKM Putri Gabe adalah surga bagi pecinta aksesoris dan suvenir homemade. 
                Selain aksesoris, Putri Gabe juga menawarkan berbagai pilihan suvenir homemade. Dari gantungan kunci, mug, tas, hingga tempat pensil, setiap suvenir memiliki ciri khasnya sendiri dan terbuat dengan keahlian tangan yang tinggi. Suvenir ini seringkali mencerminkan budaya lokal, keindahan alam, atau elemen khas dari suatu daerah, sehingga menjadi kenang-kenangan yang istimewa bagi para pelanggan.
                ',
                'nama_pemilik' => '-',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Tuba III No.19',
                'contact_id' => 12,
                'kecamatan_id' => 7,
            ],
            [
                'id' => 13,
                'nama_usaha' => 'Bika Ambon Zulaikha',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/13/zulaikha.jpg',
                'category_id' => 1,
                'deskripsi' => 'Toko UMKM Bika Ambon Zulaikha adalah tempat yang memikat hati para pecinta kuliner dengan kelezatan kue tradisional Indonesia, khususnya Bika Ambon. Dalam toko ini, Anda akan menemukan Bika Ambon yang lezat dan autentik yang terbuat dari resep turun temurun, serta berbagai variasi rasa yang menggugah selera. Selain Bika Ambon, toko UMKM Bika Ambon Zulaikha juga menawarkan berbagai produk kue lainnya yang semarak dan menggugah selera. Anda dapat menemukan kue-kue tradisional Indonesia lainnya, seperti Lapis Legit, Kue Lumpur, dan Bolu Kukus. Semua kue-kue tersebut juga diolah dengan bahan-bahan berkualitas tinggi dan resep yang autentik.
                Pelayanan yang ramah dan hangat juga menjadi ciri khas Bika Ambon Zulaikha. Tim yang berdedikasi akan membantu Anda dengan senang hati, memberikan saran tentang varian rasa, dan menjawab pertanyaan yang Anda miliki tentang produk mereka.
                ',
                'nama_pemilik' => 'Hj. Zulaikha',
                'validitas_sertif_umkm' => '-',
                'alamat_usaha' => 'Jalan Mojopahit No.70 A-C',
                'contact_id' => 13,
                'kecamatan_id' => 15,
            ],
            [
                'id' => 14,
                'nama_usaha' => 'CV. Kotama',
                'logo_usaha' => 'https://umkm.local.back.com/storage/images/14/kotama.jpg',
                'category_id' => 2,
                'deskripsi' => 'Toko UMKM Kotama Shoes adalah surganya para pecinta sepatu dengan desain unik dan berkualitas tinggi.
                Kotama Shoes sangat memperhatikan kualitas dalam setiap produk yang mereka jual. Bahan-bahan yang digunakan dipilih dengan teliti, seperti kulit berkualitas tinggi, kanvas tahan lama, atau bahan sintetis yang tahan lama. 
                Salah satu hal yang membedakan Kotama Shoes adalah fokus pada desain yang unik dan kustomisasi. Pelanggan memiliki kesempatan untuk memilih desain, warna, dan bahan yang mereka inginkan, sehingga menciptakan sepatu yang sesuai dengan gaya dan kepribadian mereka. Ini memberikan pengalaman berbelanja yang personal dan membuat setiap pelanggan merasa istimewa dengan sepatu yang benar-benar unik.
                ',
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
