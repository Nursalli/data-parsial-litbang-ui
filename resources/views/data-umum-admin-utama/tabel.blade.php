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
                    <li class="breadcrumb-item"><a href="/admin/data-umum-admin-utama">Data Umum OPD</a></li>
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
                    <a href="#detail" type="button" class="btn btn-primary mb-1" id="tombolPegawai">Data Umum
                        Pegawai</a>
                    <a href="#detail" type="button" class="btn btn-success mb-1" id="tombolKantor">Data Umum Kantor</a>
                    <a href="#detail" type="button" class="btn btn-danger mb-1" id="tombolWebAplikasi">Data Umum
                        Web/Aplikasi</a>

                    <div id="pegawai" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Umum Pegawai:</h6>
                        <table class="table table-bordered table-striped example1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>NPWP</th>
                                    <th>Golongan/Posisi</th>
                                    <th>Jenis Kelamin</th>
                                    <th>OAP/Non OAP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                <!-- foreach -->
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>12345</td>
                                    <td>Nino</td>
                                    <td>08123</td>
                                    <td>email@gmail.com</td>
                                    <td>453284723219</td>
                                    <td>Eslon II</td>
                                    <td>Laki-laki</td>
                                    <td>OAP</td>
                                    </tr>
                                    @php $i++; } @endphp
                                    <!-- endforeach -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>NPWP</th>
                                    <th>Golongan/Posisi</th>
                                    <th>Jenis Kelamin</th>
                                    <th>OAP/Non OAP</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div id="kantor" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Umum Kantor:</h6>
                        <table class="table table-bordered table-striped example1">
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
                                    <th>No</th>
                                    <th>Data</th>
                                    <th>Isi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div id="webAplikasi" class="mt-4" style="visibility: hidden;">
                        <a class="btn btn-primary mb-2" href="#" role="button" title="Catak Data">
                            <i class="fas fa-print"></i>
                        </a>
                        <h6 class="text-bold">Data Umum Web/Aplikasi:</h6>
                        <table class="table table-bordered table-striped example1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Nama Sistem</th>
                                    <th>Situs</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                <!-- foreach -->
                                @php while ($i < 5) { @endphp <tr>
                                    <td>@php echo $i+1; @endphp</td>
                                    <td>jenis</td>
                                    <td>nama sistem</td>
                                    <td>situs</td>
                                    <td>deskripsi</td>
                                    </tr>
                                    @php $i++; } @endphp
                                    <!-- endforeach -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Nama Sistem</th>
                                    <th>Situs</th>
                                    <th>Deskripsi</th>
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
        $('#pegawai').hide();
        $('#kantor').hide();
        $('#webAplikasi').hide();

        $(document).on('click', '#tombolPegawai', function () {
            $('#pegawai').show();
            $('#pegawai').css('visibility', 'visible');

            $('#kantor').hide();
            $('#kantor').css('visibility', 'hidden');

            $('#webAplikasi').hide();
            $('#webAplikasi').css('visibility', 'hidden');
        });

        $(document).on('click', '#tombolKantor', function () {
            $('#pegawai').hide();
            $('#pegawai').css('visibility', 'hidden');

            $('#kantor').show();
            $('#kantor').css('visibility', 'visible');

            $('#webAplikasi').hide();
            $('#webAplikasi').css('visibility', 'hidden');
        });

        $(document).on('click', '#tombolWebAplikasi', function () {
            $('#pegawai').hide();
            $('#pegawai').css('visibility', 'hidden');

            $('#kantor').hide();
            $('#kantor').css('visibility', 'hidden');

            $('#webAplikasi').show();
            $('#webAplikasi').css('visibility', 'visible');
        });
    });

</script>
@endsection
