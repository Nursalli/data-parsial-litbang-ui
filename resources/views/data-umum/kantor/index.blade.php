@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kantor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data Kantor</li>
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
                    <!-- <h3 class="card-title">Data Pegawai</h3><br><br> -->

                    @if(session('status-berhasil'))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('status-berhasil') }}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    @endif

                    @if(session('status-gagal'))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('status-gagal') }}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    @endif

                    @if($pageAdmin == 'Admin OPD')
                    <a class="btn btn-warning" href="/admin/data-umum/kantor/ubah" role="button" title="Ubah Data Kantor">
                        <i class="fas fa-edit"> Ubah Data Kantor</i>
                    </a>
                    @endif
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Data</th>
                                <th>Isi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Logo OPD</td>
                                <td>Image</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nama OPD</td>
                                <td>Nama OPD</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Alamat</td>
                                <td>Alamat Kantor</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Email</td>
                                <td>Email Kantor</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>No. Telp</td>
                                <td>No. Telp Kantor</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Jam Operasional</td>
                                <td>Jam Operasional Kantor</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>WhatsApp</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Facebook</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Instagram</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Twitter</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Data</th>
                                <th>Isi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection
