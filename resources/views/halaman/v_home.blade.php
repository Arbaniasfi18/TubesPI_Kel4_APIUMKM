@extends('template.v_navbar')

@section('content')

 <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="fade-up" data-aos-delay="500">
      <div class="row justify-content-between">
        <div class="col-md-6">
          <h1>Medan UMKM</h1>
          <h1>Statistik</h1>
          <h2>Website penyedia data statistik UMKM yang berkembang di Kota Medan</h2>
        </div>
        <div class="col-md-4">
          <a class="card text-center">
            @if(isset($total_umkm))
              <h3>{{ $total_umkm }}</h3>
            @else
              <h3>1400</h3>
            @endif
            <p>UMKM Terdata</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card" id="profil">
              <div class="card-body">
                <h5 class="card-title">PROFIL USAHA MIKRO, KECIL, DAN MENENGAH</h5>
                <p class="card-text"> Dengan tersedianya data profil UMKM dimaksud, diharapkan dapat memberikan manfaat bagi para pihak terutama bagi 
                     UMKM dalam rangka mempercepat akses promosi. </p>
                <p class="card-text">
                    Data profil UMKM menyajikan data informasi pengusaha (nama perusahaan, lama usaha, alamat, dll) serta data usaha
                    yang antara lain mencakup informasi kegiatan usaha, tingkat persaingan usaha, total aset, dan lain-lain.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ms-5 text-center">
            <div class="card" id="wilayah">
              <div class="card-body">
                <h5 class="card-title">Wilayah</h5>
                <?php
                    $kecamatan = array(
                        "Medan Amplas",
                        "Medan Barat",
                        "Medan Helvetia",
                        "Medan Timur",
                        "Medan Utara",
                        "Medan Sunggal",
                    );

                    $maxItems = 5;
                      echo '<div class="kecamatan-container">';
                      echo '<ul class="list-group">';
                      for ($i = 0; $i < min($maxItems, count($kecamatan)); $i++) {
                          echo '<li class="list-group-item">' . $kecamatan[$i] . '</li>';
                      }
                      echo '</ul>';
                      if (count($kecamatan) > $maxItems) {
                        echo '<a class="btn btn-outline-dark btn-rounded w-100" href="'.route('database').'" role="button" data-ripple-color="dark">View all...</a>';
                      }
                      echo '</div>';
                    ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection


