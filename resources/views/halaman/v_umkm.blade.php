@extends('template.v_navbar')

@section('content')
<section>
  <div class="container">
    <div class="card border-0">
        <div class="card-header text-white">
            {{ $umkm->nama_usaha }}
        </div>

        <div class="card-body">
            <div class="row mt-3 ms-1 mb-3">
                <div class="col-md-4">
                        <img src="{{ $umkm->logo_usaha }}" class="img-thumbnail">
                </div>
                <div class="col-md-7 ms-3">
                    <div class="row">
                        <h3 id="judul"><b>{{ $umkm->nama_usaha }}</b></h3>
                    </div>
                    <div class="row">
                        @if ($umkm->kategori_umkm == "Pangan")
                            <p>Makanan</p>
                        @elseif($umkm->kategori_umkm == "Sandang")
                            <p>Pakaian</p>
                        @else
                            <p>Perabotan</p>
                        @endif
                    </div>
                    <div class="row">
                        <p id="keterangan">{{ $umkm->deskripsi }}</p>
                    </div>
                </div>
            </div> 
            <div class="row mt-2">
                <div class="col-md-12">
                    <h3 style="text-align:center;" id="judul"><b>Produk</b></h3>
                </div>
            </div>
            <div class="row mt-2">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- 1 -->
                        @if ($umkm->produk)
                            @foreach ($umkm->produk as $produk)
                                <div class="swiper-slide" style="margin-left: 20px;">
                                    <a href="/data-umkm/{{ $umkm->nama_usaha }}/{{ $produk->nama_produk }}">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" style="width: 287px; height: 287px" src="{{ $produk->gambar_produk }}" alt="Gambar Produk">
                                            <div class="card-body">
                                            <p class="card-text text-center"><strong>{{ $produk->nama_produk }}</strong></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <p>No Product</p>
                                </div>
                            </div>
                        @endif
                       
                    </div>
                    <!-- <div class="navigation-pagination-wrapper">
                        <div class="previous-image">
                            <span aria-hidden="true"><i class="bi bi-arrow-left-circle"></i></span>
                        </div>
                        <div class="gallery-pagination"></div>
                        <div class="next-image">
                            <span aria-hidden="true"><i class="bi bi-arrow-right-circle"></i></span>    
                        </div>
                    </div> -->
                    </div>
            </div>

            <div class="row mt-2 justify-content-center" >
                <div class="col-sm-5">
                    <div class="card" id="info">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-geo-alt me-2"></i>Lokasi</h5>
                        <p class="card-text">{{ $umkm->alamat_usaha }}</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card" id="info">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-lines-fill me-2"></i>Contact</h5>
                        <p class="card-text">{{ $umkm->contact_person->no_telp }}</p>
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </div>

  </div>
</section>

<style>
    .img-thumbnail{
        width: 350px;
        height: 400px;
    }
    #judul{
        color: #2AA165;
    }
    #keterangan{
        text-align: justify;
    }
    #image{
        width: 100px;
        height: 100px;
    }

    .swiper-container {
        position: relative;
        width: 80%;
    }
    .swiper-slide {
        transition: all 1000ms linear;
        transform: scale(0.75);
    }
    .swiper-slide-active {
        transform: scale(0.75);
    }
    .image-container {
        width: auto;
        height: 350px;
        border-radius: 9px;
    }

    #produk {
        width: 100%;
        height: 80%;
        object-fit: cover;
        border-radius: 9px;
    }

    .gallery-pagination {
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }

    .next-image {
        color: #2AA165;
        position: absolute;
        right: 0;
        top: 40%;
        cursor: pointer;
    }

    .previous-image {
        color: #2AA165;
        position: absolute;
        left: 0;
        top: 40%;
        cursor: pointer;
    }

    #info{
        background-color: #2AA165;
        color: #000000;
    }
</style>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.js'></script>
<script>
$(document).ready(function () {
  var mySwiper = new Swiper(".swiper-container", {
    observer: true,
    observeParents: true,
    slidesPerView: 3,
    loopedSlides: 50,
    centeredSlides: true,
    loop: true,
    watchSlidesVisibility: true,
    speed: 1000,
    navigation: {
      nextEl: ".next-image",
      prevEl: ".previous-image"
    },
    pagination: {
      el: ".gallery-pagination",
      clickable: true
    }
  });
  mySwiper.init();
});
</script>

@endsection