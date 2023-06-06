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
                        <img src="{{ $produk->gambar_produk }}" class="img-thumbnail">
                </div>
                <div class="col-md-7 ms-3">
                    <div class="row">
                        <h3 id="judul"><b>{{ $produk->nama_produk }}</b></h3>
                    </div>
                    <div class="row">
                        <p id="keterangan">Harga : </p>
                        <p id="keterangan">IDR {{ $produk->harga }}</p>
                    </div>
                    <div class="row mt-5">
                          <div class="row mt-5  justify-content-center">
                            <ul class="pagination"  >
                                <li class="page-item"><a class="page-link border border-success" href="#"><i class="fa fa-plus text-dark"></i></a></li>
                                <li class="page-item"><a class="page-link text-dark border border-success" href="#">Lakukan Pembelian</a></li>
                                <li class="page-item"><a class="page-link border border-success" href="#"><i class="fa fa-minus text-dark"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   Lakukan Pembelian
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pembelian</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Atas nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Banyak barang yang dibeli</label>
                                <input type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Total</label>
                                <input type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Pembayaran</label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">ATM</label>
                            </div>
                                <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">E-Wallet</label>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" href="{{route('cart')}}" class="btn btn-success">Check Out</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                        
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
                        {{-- @if ($umkm->produk)
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
                        @endif --}}
                       
                    </div>
                    <div class="navigation-pagination-wrapper">
                        <div class="previous-image">
                            <span aria-hidden="true"><i class="bi bi-arrow-left-circle"></i></span>
                        </div>
                        <div class="gallery-pagination"></div>
                        <div class="next-image">
                            <span aria-hidden="true"><i class="bi bi-arrow-right-circle"></i></span>    
                        </div>
                    </div>
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