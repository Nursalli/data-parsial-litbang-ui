@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data MOU</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data MOU</li>
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
                    <a class="btn btn-success" href="/admin/data-khusus/mou/tambah" role="button" title="Tambah MOU">
                        <i class="fas fa-plus"> Tambah MOU</i>
                    </a>
                    @endif

                    <a class="btn btn-primary" href="#" role="button" title="Catak Data">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Nama Instansi/Penulis</th>
                                <th>File</th>
                                @if($pageAdmin == 'Admin OPD')
                                <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0; @endphp
                            <!-- foreach -->
                            <tr>
                                <td>@php echo $i+1; @endphp</td>
                                <td>Judul</td>
                                <td>Deskripsi</td>
                                <td>Litbang</td>
                                <td>file</td>
                                @if($pageAdmin == 'Admin OPD')
                                <td class="text-center">
                                    <a class="btn btn-warning mb-1" href="/admin/data-khusus/mou/ubah" role="button" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger mb-1 hapusUser" href="#" role="button" title="Hapus"
                                        data-toggle="modal" data-id="#" data-target="#formModalHapus">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                @endif
                            </tr>
                            @php $i++; @endphp
                            <!-- endforeach -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Nama Instansi/Penulis</th>
                                <th>File</th>
                                @if($pageAdmin == 'Admin OPD')
                                <th>Aksi</th>
                                @endif
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

@if($pageAdmin == 'Admin OPD')
<!-- The Modal -->
<div class="modal modal-danger fade" id="formModalHapus" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center" id="judulModal">Hapus MOU</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        data-feather="x"><span>&times;</span></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="#" method="post">
                    {{ csrf_field() }}
                    <p class="text-center">
                        Apakah Anda Yakin ?
                    </p>
                    <input type="hidden" name="_method" value="delete">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <input type="submit" class="btn btn-danger" name="submit" value="Yes">
            </div>
        </div>
    </div>
</div>
</form>
@endif
@endsection
