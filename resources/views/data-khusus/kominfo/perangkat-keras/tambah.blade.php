@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Perangkat Keras</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/data-khusus/perangkat-keras">Data Perangkat Keras</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Perangkat Keras</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Perangkat Keras</h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label>Spesifikasi</label>
                                    <textarea class="form-control" rows="3" placeholder="Spesifikasi ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah">
                                </div>
                                <div class="form-group">
                                    <label for="unit_kerja">Unit Kerja Pengelola</label>
                                    <input type="number" class="form-control" id="unit_kerja"
                                        placeholder="Masukkan Unit Kerja Pengelola">
                                </div>
                                <div class="form-group">
                                    <label for="tahun_terbit">Tahun Terbit</label>
                                    <input type="number" class="form-control" id="tahun_terbit"
                                        placeholder="Masukkan Tahun Terbit">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pengelola">Nama Pengelola</label>
                                    <input type="text" class="form-control" id="nama_pengelola"
                                        placeholder="Masukkan Nama Pengelola">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
