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
        Soft UI Dashboard by Creative Tim
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
</head>

<body class="g-sidenav-show  bg-gray-100 virtual-reality ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Index
                            Awal</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">CyberHive
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
    <div class="border-radius-x1 mt-3 mx-3 position-relative"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <main class="main-content mt-1 border-radius-lg">
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
                                        {{--
                                        <!-- Slides -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="cs-hero_shapes">
                                                    <div class="cs-shape cs-shape_position1">
                                                        <img src="{{ asset('public/assets/img/shape/1.jpg') }}"
                                                            alt="Shape 1" class="img-fluid"
                                                            style="width: 200px; height: auto;">
                                                    </div>
                                                    <div class="cs-shape cs-shape_position2">
                                                        <img src="{{ asset('public/assets/img/shape/2.jpg') }}"
                                                            alt="Shape 2" class="img-fluid"
                                                            style="width: 200px; height: auto;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="cs-hero_shapes">
                                                    <div class="cs-shape cs-shape_position3">
                                                        <img src="{{ asset('public/assets/img/shape/shape_3.svg') }}"
                                                            alt="Shape 3">
                                                    </div>
                                                    <div class="cs-shape cs-shape_position4">
                                                        <img src="{{ asset('public/assets/img/shape/shape_4.svg') }}"
                                                            alt="Shape 4">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="cs-hero_shapes">
                                                    <div class="cs-shape cs-shape_position5">
                                                        <img src="{{ asset('public/assets/img/shape/shape_5.svg') }}"
                                                            alt="Shape 5">
                                                    </div>
                                                    <div class="cs-shape cs-shape_position6">
                                                        <img src="{{ asset('public/assets/img/shape/shape_6.svg') }}"
                                                            alt="Shape 6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <!-- Controls -->
                                        {{-- <button class="carousel-control-prev" type="button"
                                            data-bs-target="#heroShapesCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#heroShapesCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 mt-6 mt-sm-0">
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
                                <div class="col-lg-4 col-md-4 mt-4 mt-sm-0">
                                    <div
                                        class="card card-background card-background-mask-primary move-on-hover align-items-start">
                                        <div class="cursor-pointer">
                                            <div class="full-background"
                                                style="background-image: url('../assets/img/curved-images/curved1.jpg')">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-white mb-0">Some Kind Of Blues</h5>
                                                <p class="text-white text-sm">Deftones</p>
                                                <div class="d-flex mt-5">
                                                    <button class="btn btn-outline-white rounded-circle p-2 mb-0"
                                                        type="button" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Prev">
                                                        <i class="fas fa-backward p-2"></i>
                                                    </button>
                                                    <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0"
                                                        type="button" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Pause">
                                                        <i class="fas fa-play p-2"></i>
                                                    </button>
                                                    <button class="btn btn-outline-white rounded-circle p-2 mb-0"
                                                        type="button" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Next">
                                                        <i class="fas fa-forward p-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card move-on-hover mt-4">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <p class="my-auto">Messages</p>
                                                <div class="ms-auto">
                                                    <div class="avatar-group">
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="2 New Messages">
                                                            <img alt="Image placeholder"
                                                                src="../public/assets/img/team-1.jpg">
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="1 New Message">
                                                            <img alt="Image placeholder"
                                                                src="../public/assets/img/team-2.jpg">
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="13 New Messages">
                                                            <img alt="Image placeholder"
                                                                src="../public/assets/img/team-3.jpg">
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="7 New Messages">
                                                            <img alt="Image placeholder"
                                                                src="../public/assets/img/team-4.jpg">
                                                        </a>
                                                    </div>
                                                </div>
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
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2  ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto  "" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-dark w-100"
                    href="https://www.creative-tim.com/product/soft-ui-dashboard-laravel" target="_blank">Free
                    Download</a>
                <a class="btn btn-outline-dark w-100" href="/documentation/getting-started/overview.html"
                    target="_blank">View documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard-laravel"
                        target="_blank" data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Laravel%20made%20by%20%40CreativeTim%20and%20%40UPDIVISION%20%23webdesign%20%23dashboard%20%23laravel%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro-laravel"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
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
