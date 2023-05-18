@extends('layouts.template')



@section('content')


<div class="container-xxl position-relative p-0">

    @include('components.navbar')

    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">SEO bukan tentang menjadi nomor 1</h1>
                    <p class="text-white pb-3 animated zoomIn">Seo juga berarti tentang bagaimana Anda mendapatkan target pasar yang tepat dengan budget optimal dalam proses exspansi bisnis Anda.</p>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
        
        @include('components.search')
        <!-- Service Start -->
    <div class="container-xxl py-5 bg-white">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Contact Us</h6>
                <h2 class="mt-2">Bagaimana cara memesan atau mengajukan penawaran ?</h2>
                <h4 class="mt-2">Hubungi kontak yang tersedia untuk mulai memesan dan mengajukan penawaran</h4>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa-brands fa-whatsapp fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Via Whatsapp</h5>
                        <p>Hubungi secara langsung dan praktis ke Whatsapp Kami.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Kirim Pesan</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa-solid fa-envelope fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Via Email</h5>
                        <p>Ingin kontak yang lebih profesional ? Kami menyediakan kontak E-mail.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="https://mail.google.com/mail/?view=cm&fs=1&to=zerolabs911@gmail.com" target="_blank">Kirim Email</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa-sharp fa-solid fa-headset fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Via Livechat</h5>
                        <p>Mau melakukan penawaran secara langsung ? Kami menyediakan fitur livechat online 24jam.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Chat Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


        @include('components.footer')

@endsection