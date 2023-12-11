@extends('layout.layout')
@section('admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Kategori</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Kategori</h5>

                            <div class="tombol" style="display: flex; justify-content: center;">
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Buat Data Kategori Baru
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Kategori</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/kategori/store" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">kategori barang</label>
                                                            <input type="text" class="form-control" name="kategori"
                                                                id="kategori" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <select name="status">
                                                            <option value="">Status Kategori
                                                            </option>
                                                            <option value="Aktif">Aktif</option>
                                                            <option value="Tidak Aktif">Tidak</option>
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
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($kategori as $kategori)
                                    @if ($kategori->status == 'Aktif')
                                        <tr>
                                            <td>{{ $kategori->id }}</td>
                                            <td>{{ $kategori->kategori }}</td>
                                            <td>{{ $kategori->status }}
                                            </td>
                                            <td>
                                                <div class="row">
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
                                                        Data Kategori</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/kategori/{{ $kategori->id }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @method('put')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-2">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Kategori Barang</label>
                                                                    <input value="{{ $kategori->kategori }}" type="text"
                                                                        class="form-control" name="kategori" id="kategori"
                                                                        placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <select name="status" id="status">
                                                                    <option value="">Status Kategori</option>
                                                                    <option
                                                                        value="Aktif"@if ($kategori->status == 'Aktif') selected @endif>
                                                                        Aktif</option>
                                                                    <option
                                                                        value="Tidak Aktif"@if ($kategori->status == 'Tidak Aktif') selected @endif>
                                                                        Tidak </option>
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
@endsection
