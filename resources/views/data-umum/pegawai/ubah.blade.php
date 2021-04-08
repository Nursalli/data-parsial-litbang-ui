@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Pegawai</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/data-umum/pegawai">Data Pegawai</a></li>
                    <li class="breadcrumb-item active">Ubah Pegawai</li>
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
                    <h3 class="card-title">Ubah Pegawai</h3>
                </div>

                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="no_telepon">No Telepon</label>
                                    <input type="number" class="form-control" id="no_telepon"
                                        placeholder="Masukkan No Telepon">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="npwp">NPWP</label>
                                    <input type="number" class="form-control" id="npwp" placeholder="Masukkan NPWP">
                                </div>
                                <div class="form-group">
                                    <label>Golongan/Posisi</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Pilih Golongan</option>
                                        <option>Eselon II</option>
                                        <option>Eselon III</option>
                                        <option>Eselon IV</option>
                                        <option>Staff</option>
                                        <option>Honorer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" style="width: 100%;">
                                        <option selected="selected">Pilih Jenis Kelamin</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>OAP/Non OAP</label>
                                    <select class="form-control" style="width: 100%;">
                                        <option selected="selected">Pilih</option>
                                        <option>OAP</option>
                                        <option>Non OAP</option>
                                    </select>
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
