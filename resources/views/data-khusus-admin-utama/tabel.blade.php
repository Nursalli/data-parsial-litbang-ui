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
                    <a href="#detail" type="button" class="btn btn-primary mb-1" id="tombolBuku">Data Khusus Buku</a>
                    <a href="#detail" type="button" class="btn btn-success mb-1" id="tombolPenelitian">Data Khusus
                        Penelitian</a>
                    <a href="#detail" type="button" class="btn btn-danger mb-1" id="tombolMajalah">Data Khusus
                        Majalah</a>
                    <a href="#detail" type="button" class="btn btn-warning mb-1" id="tombolJurnal">Data Khusus
                        Jurnal</a>
                    <a href="#detail" type="button" class="btn btn-info mb-1" id="tombolMOU">Data Khusus MOU</a>

                    <div id="buku" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
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
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>Judul</td>
                                    <td>SiDul</td>
                                    <td>Anto</td>
                                    <td>12</td>
                                    <td>2009</td>
                                    <td>file</td>
                                    </tr>
                                    @php $i++; } @endphp
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
                    </div>

                    <div id="penelitian" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Khusus Penelitian:</h6>
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
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>Judul</td>
                                    <td>Deskripsi</td>
                                    <td>Litbang</td>
                                    <td>file</td>
                                    </tr>
                                    @php $i++; } @endphp
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

                    <div id="majalah" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Khusus Majalah:</h6>
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
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>Judul</td>
                                    <td>Deskripsi</td>
                                    <td>Litbang</td>
                                    <td>file</td>
                                    </tr>
                                    @php $i++; } @endphp
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

                    <div id="jurnal" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Khusus Jurnal:</h6>
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
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>Judul</td>
                                    <td>Deskripsi</td>
                                    <td>Litbang</td>
                                    <td>file</td>
                                    </tr>
                                    @php $i++; } @endphp
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

                    <div id="mou" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Khusus MOU:</h6>
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
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>Judul</td>
                                    <td>Deskripsi</td>
                                    <td>Litbang</td>
                                    <td>file</td>
                                    </tr>
                                    @php $i++; } @endphp
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
    </div>
</section>
@endsection

@section('addScript')
<script>
    $(function () {
        $('#buku').hide();
        $('#penelitian').hide();
        $('#majalah').hide();
        $('#jurnal').hide();
        $('#mou').hide();

        $(document).on('click', '#tombolBuku', function () {
            $('#buku').show();
            $('#buku').css('visibility', 'visible');

            $('#penelitian').hide();
            $('#penelitian').css('visibility', 'hidden');

            $('#majalah').hide();
            $('#majalah').css('visibility', 'hidden');

            $('#jurnal').hide();
            $('#jurnal').css('visibility', 'hidden');

            $('#mou').hide();
            $('#mou').css('visibility', 'hidden');
        });

        $(document).on('click', '#tombolPenelitian', function () {
            $('#buku').hide();
            $('#buku').css('visibility', 'hidden');

            $('#penelitian').show();
            $('#penelitian').css('visibility', 'visible');

            $('#majalah').hide();
            $('#majalah').css('visibility', 'hidden');

            $('#jurnal').hide();
            $('#jurnal').css('visibility', 'hidden');

            $('#mou').hide();
            $('#mou').css('visibility', 'hidden');
        });

        $(document).on('click', '#tombolMajalah', function () {
            $('#buku').hide();
            $('#buku').css('visibility', 'hidden');

            $('#penelitian').hide();
            $('#penelitian').css('visibility', 'hidden');

            $('#majalah').show();
            $('#majalah').css('visibility', 'visible');

            $('#jurnal').hide();
            $('#jurnal').css('visibility', 'hidden');

            $('#mou').hide();
            $('#mou').css('visibility', 'hidden');
        });

        $(document).on('click', '#tombolJurnal', function () {
            $('#buku').hide();
            $('#buku').css('visibility', 'hidden');

            $('#penelitian').hide();
            $('#penelitian').css('visibility', 'hidden');

            $('#majalah').hide();
            $('#majalah').css('visibility', 'hidden');

            $('#jurnal').show();
            $('#jurnal').css('visibility', 'visible');

            $('#mou').hide();
            $('#mou').css('visibility', 'hidden');
        });

        $(document).on('click', '#tombolMOU', function () {
            $('#buku').hide();
            $('#buku').css('visibility', 'hidden');

            $('#penelitian').hide();
            $('#penelitian').css('visibility', 'hidden');

            $('#majalah').hide();
            $('#majalah').css('visibility', 'hidden');

            $('#jurnal').hide();
            $('#jurnal').css('visibility', 'hidden');

            $('#mou').show();
            $('#mou').css('visibility', 'visible');
        });
    });

</script>
@endsection
