@extends('layout.main')
@section('1')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-1">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/cr3.jpg" alt="" style="width: 100%;height: 809px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">WARUNK MEDURO</h1>
                                <p class="fs-3 fw-medium text-white mb-4 pb-2">Produk Lokal Berkualitas</p>
                                <a href="/shop"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">BELANJA
                                    SEKARANG</a>
                                {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/cr2.jpeg" alt="" style="width: 100%;height: 809px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">WARUNK MEDURO</h1>
                                <p class="fs-3 fw-medium text-white mb-4 pb-2">Varian Produk Unggulan</p>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">BELANJA
                                    SEKARANG</a>
                                {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/cr4.jpg" alt="" style="width: 100%;height: 809px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang
                                    Pelanggan</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">WARUNK MEDURO</h1>
                                <p class="fs-3 fw-medium text-white mb-4 pb-2">Kebutuhan Sehari-hari
                                </p>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">BELANJA
                                    SEKARANG</a>
                                {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2 animated slideInDown"></small>
                    <small class="animated slideInDown">Jalan - in Aja Dulu</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2 animated slideInDown"></small>
                    <small class="animated slideInDown">Setiap Hari : Nungguin Kamu </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2 animated slideInDown"></small>
                    <small class="animated slideInDown">0811 eaa mau ngapain nelpon2</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->




    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-check fa-2x text-primary"></i>
                        </div>
                        {{-- <h1 class="display-1 text-light mb-0">01</h1> --}}
                    </div>
                    <h5>Penjualan Terpercaya</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        {{-- <h1 class="display-1 text-light mb-0">02</h1> --}}
                    </div>
                    <h5>Produk Lengkap</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                        </div>
                        {{-- <h1 class="display-1 text-light mb-0">03</h1> --}}
                    </div>
                    <h5>Layanan 24 jam</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-headphones fa-2x text-primary"></i>
                        </div>
                        {{-- <h1 class="display-1 text-light mb-0">04</h1> --}}
                    </div>
                    <h5>Hubungi Kapanpun</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100 animated slideInLeft" src="img/baner.png"
                            style="object-fit: cover;" alt="" style="width: 800px; height: 800px">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Tentang Kami</h1>
                        </div>
                        <p class="mb-4 pb-2">Selamat datang di Warunk Meduro! Kami adalah lebih dari sekadar toko
                            kelontong; kami adalah komunitas yang tumbuh bersama Anda. Dengan rasa bangga dan semangat
                            penuh, kami telah menjadi tujuan utama Anda dalam memenuhi kebutuhan sehari-hari dengan cara
                            yang lebih bermakna.</p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Pelanggan Senang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Penjualan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-5">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Kami Menyediakan</h1>
                <h4 class="mb-4">Kategori Barang</h4>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">

                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Semua</li>
                        @foreach ($kategori as $kategori)
                        <li class="mx-2" data-filter=".{{ $kategori->id }}">{{ $kategori->kategori }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-2 col-md-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-1.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-3   ">
                            {{-- <p class="text-primary fw-medium mb-4" style="text-align: center">{{ $kategori->kategori }}</p> --}}
                            {{-- <h6 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-3   ">
                            <p class="text-primary fw-medium mb-4" style="text-align: center">Custom Carpentry</p>
                            {{-- <h6 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-3   ">
                            <p class="text-primary fw-medium mb-4" style="text-align: center">General Carpentry</p>
                            {{-- <h6 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-3   ">
                            <p class="text-primary fw-medium mb-4" style="text-align: center">Custom Carpentry</p>
                            {{-- <h6 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-3   ">
                            <p class="text-primary fw-medium mb-4" style="text-align: center">General Carpentry</p>
                            {{-- <h6 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-3   ">
                            <p class="text-primary fw-medium mb-4" style="text-align: center">Custom Carpentry</p>
                            {{-- <h6 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">General Carpentry</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Furniture Manufacturing</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Furniture Remodeling</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Wooden Floor</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Wooden Furniture</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-6.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Custom Work</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">kenapa harus belanja disini ?</h1>
                        </div>
                        <p class="mb-4 pb-2">"Kami adalah toko kelontong yang selalu berkomitmen untuk menyediakan
                            produk-produk segar dan berkualitas, sehingga Anda bisa mendapatkan kebutuhan sehari-hari
                            dengan keyakinan penuh."</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Produk</p>
                                        <h5 class="mb-0">Lengkap</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Penjualan </p>
                                        <h5 class="mb-0">Terpercaya</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Melayani</p>
                                        <h5 class="mb-0">24 jam</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Hubungi</p>
                                        <h5 class="mb-0">Kapanpun</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/baner.png"
                            style="object-fit: cover;" alt="" style="width: 800px; height: 800px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->





    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/quote.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Rating Kami Yaa</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat
                            amet</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
