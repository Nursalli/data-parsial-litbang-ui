@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/manajemen-user-opd">Data Pengguna</a></li>
                    <li class="breadcrumb-item active">Ubah Pengguna</li>
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
                    <h3 class="card-title">Ubah Pengguna</h3>
                </div>

                <form role="form">
                    <div class="card-body">
                        <!-- form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto">
                                            <label class="custom-file-label" for="foto">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
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
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Pilih Role</option>
                                        <option>Admin OPD</option>
                                        <option>Admin Ketua OPD</option>
                                        <option>Admin Utama</option>
                                        <option>Super Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="Masukkan Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Masukkan Password">
                                </div>
                                <div class="form-group">
                                    <label>Lingkup</label>
                                    <select class="form-control" id="lingkup" style="width: 100%;">
                                        <option selected="selected">Pilih Lingkup</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Kabupaten">Kabupaten</option>
                                        <option value="Kota">Kota</option>
                                    </select>
                                </div>
                                <div class="form-group" id="kab_kota" style="display: none;">
                                    <label for="nama_kab_kota">Nama Kabupaten/Kota</label>
                                    <input type="text" class="form-control" id="nama_kab_kota"
                                        placeholder="Masukkan Nama Kabupaten/Kota">
                                </div>
                                <div class="form-group">
                                    <label>Status Akun</label>
                                    <select class="form-control" style="width: 100%;">
                                        <option selected="selected">Pilih Status</option>
                                        <option>Aktif</option>
                                        <option>Non Aktif</option>
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

@section('addScript')
<script>
    $(function () {
        $(document).on('change', '#lingkup', function () {
            $('#kab_kota').show();
        });
    });
</script>
@endsection
