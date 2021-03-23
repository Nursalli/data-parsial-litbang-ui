@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Web/Aplikasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="admin/data-umum/webaplikasi">Data Web/Aplikasi</a></li>
                    <li class="breadcrumb-item active">Ubah Web/Aplikasi</li>
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
                    <h3 class="card-title">Ubah Web/Aplikasi</h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" style="width: 100%;">
                                        <option selected="selected">Pilih Jenis</option>
                                        <option>Website</option>
                                        <option>Aplikasi (Android/IOS)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_sistem">Nama Sistem</label>
                                    <input type="text" class="form-control" id="nama_sistem"
                                        placeholder="Masukkan Nama Sistem">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_situs">Situs</label>
                                    <input type="text" class="form-control" id="alamat_situs"
                                        placeholder="Masukkan Alamat Situs">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" rows="3" placeholder="Deskripsi ..."></textarea>
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
