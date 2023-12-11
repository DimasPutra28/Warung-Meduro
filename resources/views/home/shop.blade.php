@extends('layout.main')
@section('1')
    <!-- Page Header Start -->
    <div class="container" style="margin-bottom: 1px">

    </div>
    <!-- Page Header End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5 " style="margin-bottom: 500px">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5 wow fadeInDown" style="margin-top: 100px">Selamat Berbelanja Sesuai Kebutuhan Anda
                </h1>
                <h4 class="mb-4 wow fadeInDown">Kategori Barang</h4>
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
            <div class="row g-5">
                @foreach ($barang as $barang)
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('storage/' . $barang->gambar) }}" alt=""
                                    style="height: 100%; width: 100%;border: 2px solid black;border-radius: 5px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{ $barang->nama }}</h4>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h6 class="mb-3">Stok: {{ $barang->stok }}</h6>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <h6 class="mb-3">Rp.{{ $barang->harga }}</h6>
                                    </div>
                                </div>
                                <button class="btn btn-dark" href="">Beli Sekarang<i
                                        class="fa-cart ms-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->

                @endforeach



            </div>

        </div>
    </div>
    </div>
    <!-- Projects End -->
@endsection
