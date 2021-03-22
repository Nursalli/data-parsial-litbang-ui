@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Tabel OPD</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/data-khusus-admin-utama">Data Khusus OPD</a></li>
                    <li class="breadcrumb-item active">Data Tabel OPD</li>
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
                    <p>Data Tabel OPD</p>
                </div>
                <div class="card-body">
                    <h6 class="text-bold">Data Khusus Buku:</h6>
                    <table class="table table-bordered table-striped example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Pengarang</th>
                                <th>Jumlah Halaman</th>
                                <th>Tahun Terbit</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0; @endphp
                            <!-- foreach -->
                            <tr>
                                <td>@php echo $i+1; @endphp</td>
                                <td>Judul</td>
                                <td>SiDul</td>
                                <td>Anto</td>
                                <td>12</td>
                                <td>2009</td>
                                <td>file</td>
                            </tr>
                            @php $i++; @endphp
                            <!-- endforeach -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Pengarang</th>
                                <th>Jumlah Halaman</th>
                                <th>Tahun Terbit</th>
                                <th>File</th>
                            </tr>
                        </tfoot>
                    </table>

                    <h6 class="text-bold mt-4">Data Khusus Penelitian:</h6>
                    <table class="table table-bordered table-striped example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Nama Instansi/Penulis</th>
                                <th>File</th>
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
                            </tr>
                        </tfoot>
                    </table>

                    <h6 class="text-bold mt-4">Data Khusus Majalah:</h6>
                    <table class="table table-bordered table-striped example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Nama Instansi/Penulis</th>
                                <th>File</th>
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
                            </tr>
                        </tfoot>
                    </table>

                    <h6 class="text-bold mt-4">Data Khusus Jurnal:</h6>
                    <table class="table table-bordered table-striped example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Nama Instansi/Penulis</th>
                                <th>File</th>
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
                            </tr>
                        </tfoot>
                    </table>

                    <h6 class="text-bold mt-4">Data Khusus MOU:</h6>
                    <table class="table table-bordered table-striped example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Nama Instansi/Penulis</th>
                                <th>File</th>
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
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
