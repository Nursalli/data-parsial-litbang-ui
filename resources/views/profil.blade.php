@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Profil</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Profil</li>
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
                @if (session('status-berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('status-berhasil') }}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="card-header">
                    <a class="btn btn-warning" href="/admin/profil/ubah" role="button" title="Ubah Profil Saya">
                        <i class="fas fa-edit"> Ubah Profil Saya</i>
                    </a>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <label for="foto">Foto:</label><br>
                            <img src="{!! asset('admin-lte/dist/img/user2-160x160.jpg') !!}"
                                class="img-circle elevation-2" width="150px" height="150px" alt="User Image">
                        </div>

                        <div class="col-md-3">
                            <label for="nip">NIP:</label>
                            <p>1234</p>

                            <label for="nama">Nama:</label>
                            <p>{{ Auth::user()->nama }}</p>

                            <label for="email">Email:</label>
                            <p>{{ Auth::user()->email }}</p>

                            <label for="no_telepon">No Telepon:</label>
                            <p>{{ Auth::user()->noTelepon }}</p>
                        </div>

                        <div class="col-md-3">
                            <label for="no_telepon">Username:</label>
                            <p>{{ Auth::user()->username }}</p>

                            <label for="role">Role:</label>
                            <p>{{ Auth::user()->role }}</p>

                            <label for="role">Lingkup:</label>
                            <p>{{ Auth::user()->lingkup }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
