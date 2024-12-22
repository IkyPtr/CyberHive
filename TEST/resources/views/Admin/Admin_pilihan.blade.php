<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>
        MANAJEMEN LAB JTI PCR
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('public/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <style>
        .carousel {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .carousel-item {
            transition: transform 0.6s ease-in-out;
            height: 400px;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
            opacity: 0.7;
        }

        .carousel-indicators {
            bottom: 0;
            margin-bottom: 0.5rem;
        }

        .btn-ket {
            background-color: white !important;
            color: rgb(0, 56, 53) !important;
            border-radius: 60px;
            border: 1px solid #ccc;
            font-size: 18px;
            font-weight: bold;
            padding: 12px 24px;
        }

        .btn-ket:hover {
            background-color: #003835 !important;
            color: rgb(255, 255, 255) !important;
            border-color: #003835;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100 virtual-reality overflow-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">KOORDINATROR / PESERTA</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                        CyberHive
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0 text-capitalize">Manajemen Lab JTI Politeknik Caltex Riau</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end"
                id="navbar">
                <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                    <li>
                        <a class="opacity-5 text-dark" href="javascript:;"> {{ session('admin')->nama }}</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="border-radius-x1 mt-3 mx-3 position-relative vh-100"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <br><br><br><br>
        <main class="main-content position-relative border-radius-lg d-flex align-items-center justify-content-center"
            style="height: calc(100vh - 100px); width: 110%;">
            <div class="section min-vh-100 position-relative transform-scale-8 transform-scale-md-8">
                <div class="container">
                    <div class="row pt-20 justify-content-center">
                        <div class="col-lg-30 col-md-12">
                            <div class="row mt-1">
                                <div class="col-lg-10 col-md-6">
                                    <div class="card">
                                        <div class="card-body text">
                                            <br>
                                            <div class="me-auto">
                                                <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                                    class="img-fluid mt-n4 mb-0" style="max-height: 60px; width: auto;">
                                            </div><br>
                                            <h3>
                                                Selamat Datang {{ session('admin')->nama }}
                                            </h3>
                                            <br>
                                            <div class="d-flex">
                                                <h4 class="mb-2 text-black">
                                                    Silakan memilih jenis data yang ingin diakses terlebih dahulu
                                                    sebelum melanjutkan pengelolaan informasi.
                                                    Anda dapat melihat data peserta, data koordinator, atau data lab
                                                    perkuliahan sesuai kebutuhan.
                                                    Pastikan untuk memilih dengan tepat agar proses pengelolaan berjalan
                                                    lancar.
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-4 bg-transparent">
                                        <div class="card-body ">
                                            <div class="d-flex justify-content-between gap-6 ">
                                                <button class="btn btn-ket btn-lg flex-grow-1"
                                                    onclick="window.location.href='{{ url('/admin/create') }}'">
                                                    <i class="fas fa-book me-2"></i>
                                                    Daftar Lab Mahasiswa
                                                </button>
                                                <button class="btn btn-ket btn-lg flex-grow-1"
                                                    onclick="window.location.href='{{ url('/admin/Koor') }}'">
                                                    <i class="fas fa-book me-2"></i>
                                                    Daftar Koordinator
                                                </button>
                                                <button class="btn btn-ket btn-lg flex-grow-1"
                                                    onclick="window.location.href='{{ route('peserta.index') }}'">
                                                    <i class="fas fa-book me-2"></i>
                                                    Daftar Peserta
                                                </button>
                                            </div>
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
    <!--   Core JS Files   -->
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/chartjs.min.js') }}"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8eda99853d7f3fcb","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2024.10.5","token":"1b7cbb72744b40c580f8633c6b62637e"}'
        crossorigin="anonymous"></script>
</body>

</html>
