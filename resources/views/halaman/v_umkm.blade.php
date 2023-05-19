@extends('template.v_navbar')

@section('content')
<section>
  <div class="container">
    <div class="card border-0">
        <div class="card-header text-white">
            Dapur Mas Agung
        </div>

        <div class="card-body">
            <div class="row mt-3 ms-1 mb-3">
                <div class="col-md-4">
                        <img src="assets/img/1.jpg" class="img-thumbnail">
                </div>
                <div class="col-md-7 ms-3">
                    <div class="row">
                        <h3 id="judul"><b>DAPUR MAS AGUNG</b></h3>
                    </div>
                    <div class="row">
                        <p>Makanan</p>
                    </div>
                    <div class="row">
                        <p id="keterangan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, consequuntur temporibus 
                        iure nam error quidem porro, accusamus totam, consequatur nobis eum optio fugiat ad! 
                        Officiis optio eligendi assumenda quisquam dicta.</p>

                        <p id="keterangan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, consequuntur temporibus 
                        iure nam error quidem porro, accusamus totam, consequatur nobis eum optio fugiat ad! 
                        Officiis optio eligendi assumenda quisquam dicta.</p>

                        <p id="keterangan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, consequuntur temporibus 
                        iure nam error quidem porro, accusamus totam, consequatur nobis eum optio fugiat ad! 
                        Officiis optio eligendi assumenda quisquam dicta.</p>
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
                        <div class="swiper-slide">
                        <div class="image-container">
                            <img id="produk" src="assets/img/1.jpg">
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="image-container">
                            <img id="produk" src="assets/img/1.jpg">
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="image-container">
                            <img id="produk" src="assets/img/1.jpg">
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="image-container">
                            <img id="produk" src="assets/img/1.jpg">
                        </div>
                        </div>
                       
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
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card" id="info">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-lines-fill me-2"></i>Contact</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
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