<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
        content="creative tim, updivision, html dashboard, laravel, html css dashboard laravel, soft ui dashboard laravel, laravel soft ui dashboard, soft ui admin, laravel dashboard, laravel admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, soft ui dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, soft ui dashboard, soft ui laravel bootstrap 5 dashboard" />
    <meta name="description"
        content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta itemprop="name" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta itemprop="description"
        content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta itemprop="image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/602/original/soft-ui-dashboard-laravel.jpg" />
    <meta name="twitter:card" content="product" />
    <meta name="twitter:site" content="@creativetim" />
    <meta name="twitter:title" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta name="twitter:description"
        content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta name="twitter:creator" content="@creativetim" />
    <meta name="twitter:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/602/original/soft-ui-dashboard-laravel.jpg" />
    <meta property="fb:app_id" content="655968634437471" />
    <meta property="og:title" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/soft-ui-dashboard-laravel" />
    <meta property="og:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/602/original/soft-ui-dashboard-laravel.jpg" />
    <meta property="og:description"
        content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta property="og:site_name" content="Creative Tim" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
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
            width: 300px;
            border-radius: 10px;
            overflow: hidden;
        }
        .carousel-item {
            transition: transform 0.6s ease-in-out;
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
                    <a href="https://www.creative-tim.com/product/soft-ui-dashboard-laravel" target="_blank"
                        class="btn btn-primary active mb-0 text-white" role="button" aria-pressed="true">
                        Download
                    </a>
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
                                <div class="me-auto">
                                    <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                        class="img-fluid mt-n4 mb-0" style="max-height: 60px; width: auto;">
                                    <h4 class="text-uppercase mb-0 ms-1">PENGISIAN LOGBOOK JTI</h4>
                                </div>
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
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-8 mt-8 mt-sm-4">
                                    <div class="card bg-gradient-dark move-on-hover">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <h4 class="mb-2 text-white">
                                                    Silahkan mengisi logbook terlebih dahulu sebelum
                                                    melakukan perkuliahan atau kegiatan
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card move-on-hover mt-4">
                                        <div class="card-body">

                                        </div>
                                    </div>
                                    <div class="card move-on-hover mt-4">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-primary" onclick="logPerkuliahan()">
                                                    Log Perkuliahan
                                                </button>
                                                <button class="btn btn-secondary" onclick="logKegiatan()">
                                                    Log Kegiatan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-6 mt-sm-0">
                                    <div
                                        class="card card-background card-background-mask-primary move-on-hover align-items-start">
                                        <div class="ms-auto">
                                            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                                                <!-- Indicators -->
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#imageCarousel"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#imageCarousel"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#imageCarousel"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#imageCarousel"
                                                        data-bs-slide-to="3"></button>
                                                </div>
                                                <!-- Slides -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('public/assets/img/lab1.jpg') }}"
                                                            class="d-block w-100" alt="Lab 1"
                                                            style="height: 200px; object-fit: cover;">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('public/assets/img/lab2.jpg') }}"
                                                            class="d-block w-100" alt="Lab 2"
                                                            style="height: 200px; object-fit: cover;">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('public/assets/img/lab3.jpg') }}"
                                                            class="d-block w-100" alt="Lab 3"
                                                            style="height: 200px; object-fit: cover;">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('public/assets/img/lab4.jpg') }}"
                                                            class="d-block w-100" alt="Lab 4"
                                                            style="height: 200px; object-fit: cover;">
                                                    </div>
                                                </div>
                                                <!-- Controls -->
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#imageCarousel" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#imageCarousel" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
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
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#imageCarousel');
            let touchStartX = 0;
            let touchEndX = 0;
            carousel.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            });
            carousel.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });
            function handleSwipe() {
                if (touchStartX - touchEndX > 50) {
                    // Swipe left
                    bootstrap.Carousel.getInstance(carousel).next();
                }
                if (touchEndX - touchStartX > 50) {
                    // Swipe right
                    bootstrap.Carousel.getInstance(carousel).prev();
                }
            }
        });
    </script>
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
