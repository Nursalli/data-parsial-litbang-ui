@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Umum OPD</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data Umum OPD</li>
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
                </div>
                <div class="class-body p-4">
                    <!-- <form action="#" method=""> -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pilih OPD</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Pilih OPD</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success submit">Submit</button>
                            </div>
                        </div>
                    <!-- </form> -->

                    <div id="cari" style="display: none;">
                        <hr style="border-top: 1px solid #17a2b8;">
                        <h2 class="text-center mb-4">Litbang</h2>

                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow" style="width: 18rem;">
                                    <img class="card-img-top bg-primary" src="{!! asset('img/grafik.png') !!}"
                                        alt="Card image cap"
                                        style="max-width: 100%; min-width: 100%; max-height:200px; min-height:200px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-bold">Data Grafik</h5>
                                        <p class="card-text">Menampilkan Grafik Data Parsial litbang</p>
                                        <a href="/admin/data-umum-admin-utama/grafik" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow" style="width: 18rem;">
                                    <img class="card-img-top bg-success" src="{!! asset('img/tabel.png') !!}"
                                        alt="Card image cap"
                                        style="max-width: 100%; min-width: 100%; max-height:200px; min-height:200px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-bold">Data Tabel</h5>
                                        <p class="card-text">Menampilkan Data Tabel litbang</p>
                                        <a href="/admin/data-umum-admin-utama/tabel" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>
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
        // $('#cari').hide();

        $(document).on('click', '.submit', function () {
            $('#cari').show();
        });
    });

</script>
@endsection
