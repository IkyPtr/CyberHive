<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="creative tim, updivision, html dashboard, laravel, html css dashboard laravel, soft ui dashboard laravel, laravel soft ui dashboard, soft ui admin, laravel dashboard, laravel admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, soft ui dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, soft ui dashboard, soft ui laravel bootstrap 5 dashboard">
    <meta name="description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta itemprop="name" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta itemprop="description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/602/original/soft-ui-dashboard-laravel.jpg" />
    <meta name="twitter:card" content="product" />
    <meta name="twitter:site" content="@creativetim" />
    <meta name="twitter:title" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta name="twitter:description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta name="twitter:creator" content="@creativetim" />
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/602/original/soft-ui-dashboard-laravel.jpg" />
    <meta property="fb:app_id" content="655968634437471" />
    <meta property="og:title" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/soft-ui-dashboard-laravel" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/602/original/soft-ui-dashboard-laravel.jpg" />
    <meta property="og:description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta property="og:site_name" content="Creative Tim" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}"> --}}
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>Form Penginputan Data</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('public/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <style>
    .card {
        width: 150%;
    }
    .form-control {
        font-size: 14px;
        padding: 15px;
    }
    .col-xl-8 {
        width: 100%;
    }
    .form-control:focus {
        border-color: #0077b5 !important; /* LinkedIn blue */
        box-shadow: 0 0 0 0.2rem rgba(0, 119, 181, 0.25) !important;
    }

    .form-select:focus {
        border-color: #0077b5 !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 119, 181, 0.25) !important;
    }
    </style>
</head>
<body class="g-sidenav-show bg-gray-100 virtual-reality overflow-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">Index Awal</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                        CyberHive
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0 text-capitalize">Manajemen Lab JTI Politeknik Caltex Riau</h6>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="border-radius-x1 mt-1 mx-1 position-relative vh-100"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <main class="main-content"
            style="height: calc(0vh - 0px);
                    Width: calc(210vh - 210px)">
            <div class="section min-vh-50 position-relative transform-scale-1 transform-scale-md-8">
                <div class="container d-flex justify-content-start">
                    <div class="row pt-610 justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-10 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-100">
                                <div class="container-fluid py-4">
                                    <div class="card">
                                        <div class="card-header pb-0 px-3">
                                            <div class="card-header pb-0">
                                                <div class="text-left mb-4">
                                                    <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                                        class="img-fluid mt-n4 mb-2" style="max-height: 60px; width: auto; ">
                                                        <h6 class="mb-0">{{ __('Form Penginputan Data Admin') }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-4 p-3">
                                            <form action="/submit" method="POST" role="form text-left">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="Nama" class="form-control-label">Nama</label>
                                                            <input class="form-control" type="text" id="Nama" name="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="NoRuang" class="form-control-label">Nomor Ruangan</label>
                                                            <input class="form-control" type="text" id="NoRuang" name="NoRuang">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="Matkul" class="form-control-label">Mata Kuliah</label>
                                                            <input class="form-control" type="text" id="Matkul" name="Matkul">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="Kelas" class="form-control-label">Kelas</label>
                                                            <input class="form-control" type="text" id="Kelas" name="SKS">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="SKS" class="form-control-label">SKS</label>
                                                            <input class="form-control" type="text" id="SKS" name="SKS">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="Hadir" class="form-control-label">Jumlah Hadir</label>
                                                            <input class="form-control" type="text" id="Hadir" name="Hadir">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="TidakHadir" class="form-control-label">Jumlah Tidak Hadir</label>
                                                            <input class="form-control" type="text" id="TidakHadir" name="TidakHadir">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="Tanggal" class="form-control-label">Tanggal</label>
                                                            <input class="form-control" type="date" id="Tanggal" name="Tanggal">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="JamMasuk" class="form-control-label">Jam Masuk</label>
                                                            <input class="form-control" type="time" id="JamMasuk" name="JamMasuk">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="JamKeluar" class="form-control-label">Jam Keluar</label>
                                                            <input class="form-control" type="time" id="JamKeluar" name="JamKeluar">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'SIMPAN' }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>
</html>
