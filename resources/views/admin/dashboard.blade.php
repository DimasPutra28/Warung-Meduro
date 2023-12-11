@extends('layout.layout')
@section('admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Barang</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>

                                    <tr class="text-dark">
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Berat</th>
                                        <th scope="col">Tgl Produksi</th>
                                        <th scope="col">Tgl kedaluwarsa</th>
                                        <th scope="col">Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Unity Pugh</td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Barang</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>

                                    <tr class="text-dark">
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Berat</th>
                                        <th scope="col">Tgl Produksi</th>
                                        <th scope="col">Tgl kedaluwarsa</th>
                                        <th scope="col">Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Unity Pugh</td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->






    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection

