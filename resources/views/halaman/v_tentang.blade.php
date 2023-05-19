@extends('template.v_navbar')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="card">
                <h3 class="mt-4 ms-4"><b>UMKM Stats</b></h3>
                    <p class="ms-4 mb-3 me-4">Aplikasi berbasis website yang menyediakan data UMKM di Kota Medan. 
                        UMKM adalah usaha produktif yang dimiliki perorangan maupun badan usaha yang telah memenuhi kriteria sebagai usaha mikro.
                        Pada aplikasi ini, data UMKM di tampilkan berdasarkan kecamatan yang ada di Kota Medan. Setiap Kecamatan terbagi menjadi tiga kategori
                        yaitu kategori pangan, sandang, papan. Pengguna dapat mengakses data informasi tentang UMKM secara lengkap.
                    </p>
                    <p class="ms-4 mb-3 me-4">Aplikasi ini dibuat untuk memenuhi tugas besar mata kuliah Pemrograman Integrative.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .container{
        color: #000000;
        font-family: 'Poppins', sans-serif;
        text-align: justify;
    }
</style>

@endsection