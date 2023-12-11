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

                            <div class="tombol" style="display: flex; justify-content: center;">
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Buat Data Barang Baru
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/adminbrg/store" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-2">
                                                    <label for="formFile" class="form-label">Gambar Barang</label>
                                                    <input class="form-control" type="file" name="gambar"
                                                        id="gambar">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1" class="form-label">Nama
                                                                Barang</label>
                                                            <input type="text" class="form-control" name="nama"
                                                                id="nama" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1" class="form-label">Harga
                                                                Barang</label>

                                                            <input type="text" class="form-control" name="harga"
                                                                id="harga" placeholder="xxxxxxx">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1" class="form-label">Stok
                                                                Barang</label>
                                                            <input type="text" class="form-control" name="stok"
                                                                id="stok" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1" class="form-label">Berat
                                                                Barang</label>

                                                            <input type="text" class="form-control" name="berat"
                                                                id="berat" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1" class="form-label">Tanggal
                                                                Produksi</label>
                                                            <input type="date" class="form-control" name="produksi"
                                                                id="produksi" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1" class="form-label">Tanggal
                                                                Kedaluwarsa</label>
                                                            <input type="date" class="form-control" name="expired"
                                                                id="expired" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Deskripsi Barang</label>
                                                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <select name="status">
                                                            <option value="">Status Barang
                                                            </option>
                                                            <option value="Jual">Jual</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" value="simpan"
                                                class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($barang as $barang)
                                    @if ($barang->status == 'Jual')
                                        <tr>
                                            <td>{{ $barang->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $barang->gambar) }}"
                                                    style="height: 50%; width: 50%; border: 2px solid black;border-radius: 5px"
                                                    alt="">
                                            </td>
                                            <td>{{ $barang->nama }}</td>
                                            <td>{{ $barang->deskripsi }}</td>
                                            <td>{{ $barang->harga }}</td>
                                            <td>{{ $barang->stok }}</td>
                                            <td>{{ $barang->berat }}</td>
                                            <td>{{ $barang->produksi }}</td>
                                            <td>{{ $barang->expired }}</td>
                                            <td>{{ $barang->status }}
                                            </td>
                                            <td>
                                                <div class="row">
                                                    {{-- <form action="/adminbarang/{{ $barang->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-sm btn-danger" type="submit"
                                                            value="Delete">
                                                    </form> --}}

                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModaleditbr">
                                                            Edit
                                                        </button>
                                                    </div>
                                                </div>

                                            </td>
                                    @endif
                                    </tr>
                                    <div class="modal fade" id="exampleModaleditbr" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah
                                                        Data Barang</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/adminbarang/{{ $barang->id }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @method('put')
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="formFile" class="form-label">Gambar
                                                                    Barang</label>
                                                                <input class="form-control" type="file" name="gambar"
                                                                    id="gambar">
                                                                <input type="hidden" name="oldImage"
                                                                    value="{{ $barang->gambar }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src="{{ asset('storage/' . $barang->gambar) }}"
                                                                    style="height: 80%; width: 50%; border: 2px solid black;border-radius: 5px"
                                                                    alt="">
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Nama Barang</label>
                                                                    <input value="{{ $barang->nama }}" type="text"
                                                                        class="form-control" name="nama"
                                                                        id="nama" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Harga Barang</label>

                                                                    <input value="{{ $barang->harga }}" type="text"
                                                                        class="form-control" name="harga"
                                                                        id="harga" placeholder="xxxxxxx">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Stok Barang</label>
                                                                    <input value="{{ $barang->stok }}" type="text"
                                                                        class="form-control" name="stok"
                                                                        id="stok" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Berat Barang</label>

                                                                    <input value="{{ $barang->berat }}" type="text"
                                                                        class="form-control" name="berat"
                                                                        id="berat" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Tanggal
                                                                        Produksi</label>
                                                                    <input value="{{ $barang->produksi }}" type="date"
                                                                        class="form-control" name="produksi"
                                                                        id="produksi" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Tanggal
                                                                        Kedaluwarsa</label>
                                                                    <input value="{{ $barang->expired }}" type="date"
                                                                        class="form-control" name="expired"
                                                                        id="expired" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="exampleFormControl"
                                                                    class="form-label">Deskripsi Barang</label>
                                                                <input value="{{ $barang->deskripsi }}"
                                                                    class="form-control" name="deskripsi" id="deskripsi"
                                                                    rows="3">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select name="status" id="status">
                                                                    <option value="">Status Barang</option>
                                                                    <option
                                                                        value="Jual"@if ($barang->status == 'Jual') selected @endif>
                                                                        Jual</option>
                                                                    <option
                                                                        value="Tidak"@if ($barang->status == 'Tidak') selected @endif>
                                                                        Tidak Dijual</option>
                                                                </select>
                                                            </div>


                                                        </div>


                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="submit" value="simpan"
                                                                class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
