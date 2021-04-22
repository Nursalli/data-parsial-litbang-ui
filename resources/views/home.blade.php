@extends('template.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Grafik Data Parsial 2021</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if($pageAdmin == 'Admin OPD' || $pageAdmin == 'Admin Ketua OPD')
                    <!-- Default box -->
                    <div class="card card-solid">
                        <div class="card-body pb-0">
                            <div class="row d-flex align-items-stretch">
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-info">
                                        <div class="card-header text-light border-bottom-0">
                                            Profile OPD
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>@if (Auth::user()->namaOPD == '-') Provinsi
                                                            @else {{ Auth::user()->namaOPD }} @endif</b></h2>
                                                    <ul class="ml-4 mb-0 fa-ul text-light">
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Alamat:
                                                            Demo Street 123, Demo City 04312, NJ</li>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-envelope"></i></span> Email:
                                                            opd@gmail.com</li>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> No. Telp: +
                                                            800 - 12 12 23 52</li>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-clock"></i></span> Jam
                                                            Senin - Jumat (08.00 - 16.00 WIT)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="{!! asset('img/ShadowPabar1.png') !!}" alt=""
                                                        class="img-square img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-light">
                                            <div class="text-right">
                                                <a href="#" class="btn btn-sm bg-teal" title="Whatsapp">
                                                    <i class="fab fa-whatsapp-square"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm bg-teal" title="Facebook">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm bg-teal" title="Instagram">
                                                    <i class="fab fa-instagram-square"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm bg-teal" title="Twitter">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                                <a href="/admin/data-umum/kantor" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-link"></i> Kunjungi Menu
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-success">
                                        <div class="card-header text-light border-bottom-0">
                                            Daftar Website OPD
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>@if (Auth::user()->namaOPD == '-') Provinsi
                                                            @else {{ Auth::user()->namaOPD }} @endif</b></h2>
                                                    <ul class="ml-4 mb-0 fa-ul text-light">
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Website OPD</li></a>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Website E-Learning
                                                        </li></a>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Website E-Journal
                                                        </li></a>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Website E-Search
                                                        </li></a>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="{!! asset('img/logoPC2Revisi.png') !!}" alt=""
                                                        class="img-square img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-light">
                                            <div class="text-right">
                                                <a href="/admin/data-umum/webaplikasi" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-link"></i> Kunjungi Menu
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-primary">
                                        <div class="card-header text-light border-bottom-0">
                                            Daftar Aplikasi OPD
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>@if (Auth::user()->namaOPD == '-') Provinsi
                                                            @else {{ Auth::user()->namaOPD }} @endif</b></h2>
                                                    <ul class="ml-4 mb-0 fa-ul text-light">
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Aplikasi OPD</li>
                                                        </a>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Aplikasi E-Learning
                                                        </li></a>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Aplikasi E-Journal
                                                        </li></a>
                                                        <li class="small mb-1"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-globe"></i></span><a href="#"
                                                                target="_blank" class="text-white"> Aplikasi E-Search
                                                        </li></a>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="{!! asset('img/logoAps2.png') !!}" alt=""
                                                        class="img-square img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-light">
                                            <div class="text-right">
                                                <a href="/admin/data-umum/webaplikasi" class="btn btn-sm btn-success">
                                                    <i class="fas fa-link"></i> Kunjungi Menu
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($pageAdmin == 'Admin OPD' || $pageAdmin == 'Admin Ketua OPD')
                    <div class="row">
                        <!-- Kiri -->
                        <div class="col-md-6 card-kiri">
                            <h3 class="card-title">Data Umum:</h3><br><br>
                            <!-- BAR CHART -->
                            <div class="card card-success grafik-kiri">
                                <div class="card-header head-grafik-kiri">
                                    <h3 class="card-title">Statistik Pegawai</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="barChart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        <div class=" text-center text-success"><i class="fas fa-users"></i> Total
                                            Pegawai: 1000 Orang</div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- PIE CHART -->
                            <div class="card card-danger grafik-kiri">
                                <div class="card-header head-grafik-kiri">
                                    <h3 class="card-title">Statistik Jabatan</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="pieChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- Kanan -->
                        <div class="col-md-6">
                            <h3 class="card-title">Data Khusus:</h3><br><br>
                            <!-- DONUT CHART -->
                            <div class="card card-warning grafik-kiri">
                                <div class="card-header head-grafik-kiri">
                                    <h3 class="card-title">@if (Auth::user()->namaOPD == 'Litbang') Produk Litbang
                                        @else Data Kominfo @endif</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="donutChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    @endif

                    @if($pageAdmin == 'Admin Utama' || $pageAdmin == 'Super Admin')
                    <h3 class="card-title">Data Umum Seluruh OPD:</h3><br><br>
                    <div class="row">
                        <!-- Kiri -->
                        <div class="col-md-6">
                            <!-- BAR CHART -->
                            <div class="card card-success grafik-kiri">
                                <div class="card-header head-grafik-kiri">
                                    <h3 class="card-title">Statistik Pegawai</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="barChart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        <div class=" text-center text-success"><i class="fas fa-users"></i> Total
                                            Pegawai: 1000 Orang</div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-6">
                            <!-- PIE CHART -->
                            <div class="card card-danger grafik-kiri">
                                <div class="card-header head-grafik-kiri">
                                    <h3 class="card-title">Statistik Jabatan</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="pieChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    @endif
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

@section('addScript')
<script>
    $(function () {
        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: [
                'Eselon II',
                'Eselon III',
                'Eselon IV',
                'Staff',
                'Honorer',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
            }]
        }
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var ChartData = {
            labels: ['OAP', 'Non OAP'],
            datasets: [{
                    label: 'Perempuan',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [64, 59]
                },
                {
                    label: 'Laki-laki',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [39, 56]
                },
            ]
        }

        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, ChartData)
        var temp0 = ChartData.datasets[0]
        var temp1 = ChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        @if (Auth::user()->namaOPD == 'Litbang')
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Buku',
                'Penelitian',
                'Majalah',
                'Jurnal',
                'MOU',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        @else
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Perangkat Keras',
                'Perangkat Lunak',
                'Aplikasi',
            ],
            datasets: [{
                data: [700, 500, 400],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
        @endif

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })
    })

</script>
@endsection
