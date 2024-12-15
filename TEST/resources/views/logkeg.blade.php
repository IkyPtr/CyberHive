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
            /* Changed from 300px to 100% */
            border-radius: 10px;
            overflow: hidden;
        }
        .carousel-item {
            transition: transform 0.6s ease-in-out;
            height: 400px;
            /* Added fixed height */
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
        /* Style for the rounded and white buttons with black text */
        /* Style for the rounded and white buttons with black text */
        .btn-ket {
            background-color: white !important;  /* White background */
            color: rgb(0, 56, 53) !important;  /* Black text */
            border-radius: 60px;  /* Rounded corners */
            border: 1px solid #ccc;  /* Add a light border for better contrast */
            font-size: 18px;  /* Increased font size */
            font-weight: bold;  /* Make the text bold for emphasis */
            padding: 12px 24px;  /* Adjust padding for better button size */
        }

        .btn-ket:hover {
            background-color: #003835 !important;  /* Slightly darker background when hovered */
            color: rgb(255, 255, 255) !important;  /* Ensure the text remains black */
            border-color: #003835;  /* Darker border on hover */
        }
        .btn-linkedin {
            background-color: #77b3b8 !important;  /* White background */
            color: rgb(255, 255, 255) !important;  /* Black text */
            border-radius: 60px;  /* Rounded corners */
            border: 1px solid #77b3b8;  /* Add a light border for better contrast */
            font-size: 18px;  /* Increased font size */
            font-weight: bold;  /* Make the text bold for emphasis */
            padding: 12px 24px;  /* Adjust padding for better button size */
        }

        .btn-linkedin:hover {
            background-color: #003835 !important;  /* Slightly darker background when hovered */
            color: #77b3b8 !important;  /* Ensure the text remains black */
            border-color: #003835;  /* Darker border on hover */
        }


    </style>
</head>
<body class="g-sidenav-show  bg-gray-100 virtual-reality overflow-hidden">
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
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end"
                id="navbar">
                <div class="nav-item d-flex align-self-end">
                    <button type="button" class="btn btn-linkedin btn-icon mt-2">
                        <a href="{{ url('/login') }}" class="text-white text-decoration-none">
                            <span class="btn-inner--text">LOGIN</span>
                        </a>
                    </button>
                </div>
                <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="border-radius-x1 mt-3 mx-3 position-relative vh-100"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <br><br><br><br>
        <main class="main-content position-relative border-radius-lg d-flex align-items-center justify-content-center"
            style="height: calc(100vh - 100px);">
            <div class="section min-vh-100 position-relative transform-scale-10 transform-scale-md-8">
                <div class="container">
                    <div class="row pt-20 justify-content-center">
                        <div class="col-lg-30 col-md-12">
                            <div class="d-flex">

                                <div class="ms-auto">
                                    <div id="heroShapesCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <!-- Indicators -->
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#heroShapesCarousel"
                                                data-bs-slide-to="0" class="active"></button>
                                            <button type="button" data-bs-target="#heroShapesCarousel"
                                                data-bs-slide-to="1"></button>
                                            <button type="button" data-bs-target="#heroShapesCarousel"
                                                data-bs-slide-to="2"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-10 col-md-6">
                                    <div class="card ">
                                        <div class="card-body text-">
                                            <br>
                                            <div class="me-auto">
                                                <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                                    class="img-fluid mt-n4 mb-0" style="max-height: 60px; width: auto;">
                                            </div><br>
                                            <h1>
                                                Logbook Jurusan Teknologi Informasi
                                            </h1><br>
                                            <div class="d-flex">
                                                <h4 class="mb-2 text-black">
                                                    Silahkan mengisi logbook terlebih dahulu sebelum
                                                    melakukan perkuliahan atau kegiatan
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-4 bg-transparent">
                                        <div class="card-body ">
                                            <div class="d-flex justify-content-between gap-6 ">
                                                <button class="btn btn-ket btn-lg flex-grow-1"
                                                    onclick="window.location.href='{{ url('/pinjamLab') }}'">
                                                    <i class="fas fa-book me-2"></i>
                                                    Pinjam Laboratorium
                                                </button>
                                                <button class="btn btn-ket btn-lg flex-grow-1"
                                                    onclick="window.location.href='{{ url('/logkeg/KOOR') }}'">
                                                    <i class="fas fa-book me-2"></i>
                                                    Logbook Koordinator
                                                </button>
                                                <button class="btn btn-ket btn-lg flex-grow-1"
                                                    onclick="window.location.href='{{ url('/peserta/create') }}'">
                                                    <i class="fas fa-book me-2"></i>
                                                    Logbook Peserta
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
