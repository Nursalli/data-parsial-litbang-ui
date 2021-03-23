@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Data Kantor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="admin/data-umum/kantor">Data Kantor</a></li>
                    <li class="breadcrumb-item active">Ubah Data Kantor</li>
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
                    <h3 class="card-title">Ubah Data Kantor</h3>
                </div>

                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Logo OPD</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo">
                                            <label class="custom-file-label" for="logo">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_opd">Nama OPD</label>
                                    <input type="text" class="form-control" id="nama_opd"
                                        placeholder="Masukkan Nama OPD">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">No Telepon</label>
                                    <input type="number" class="form-control" id="no_telp"
                                        placeholder="Masukkan No Telepon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="operasional">Jam Operasional</label>
                                    <input type="text" class="form-control" id="operasional"
                                        placeholder="Masukkan Jam Operasional">
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp</label>
                                    <input type="text" class="form-control" id="whatsapp"
                                        placeholder="Masukkan Akun WhatsApp">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook"
                                        placeholder="Masukkan Akun Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" id="instagram"
                                        placeholder="Masukkan Akun Instagram">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter"
                                        placeholder="Masukkan Akun Twitter">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection
