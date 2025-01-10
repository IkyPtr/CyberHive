<!DOCTYPE html>
<html lang="en">

<head>
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
            border-color: #0077b5 !important;
            /* LinkedIn blue */
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
                        <a class="opacity-5 text-dark" href="javascript:;">Cari data ADMIN</a>
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
        <main class="main-content" style="height: calc(0vw - 0px); width: calc(95vw - 10px);">
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
                                                    <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}"
                                                        alt="PCR Logo" class="img-fluid mt-n4 mb-2"
                                                        style="max-height: 60px; width: auto; ">
                                                    <h6 class="mb-0">{{ __('Form Cari Data Lab Kuliah') }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3 p-2">
                                            <form action="{{ route('admin.store') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="ruang_lab">Ruang Laboratorium</label>
                                                            <select class="form-control" id="ruang_lab" name="ruang_lab"
                                                                required>
                                                                <option value="" disabled selected>Pilih ruang lab
                                                                </option>
                                                                <option value="152">Lab 152</option>
                                                                <option value="156">Lab 156</option>
                                                                <option value="225">Lab 225</option>
                                                                <option value="252">Lab 252</option>
                                                                <option value="256">Lab 256</option>
                                                                <option value="281">Lab 281</option>
                                                                <option value="282">Lab 282</option>
                                                                <option value="283">Lab 283</option>
                                                                <option value="284">Lab 284</option>
                                                                <option value="313">Lab 313</option>
                                                                <option value="316">Lab 316</option>
                                                                <option value="317">Lab 317</option>
                                                                <option value="319">Lab 319</option>
                                                                <option value="320">Lab 320</option>
                                                                <option value="324">Lab 324</option>
                                                                <option value="325">Lab 325</option>
                                                                <option value="329">Lab 329</option>
                                                                <option value="330">Lab 330</option>
                                                                <option value="352">Lab 352</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="matakuliah">Mata Kuliah</label>
                                                            <select class="form-control" id="matakuliah"
                                                                name="matakuliah" required>
                                                                <option value="" disabled selected>Pilih mata
                                                                    kuliah</option>
                                                                <option value="Algoritma">Algoritma</option>
                                                                <option value="Animasi">Animasi</option>
                                                                <option value="Data Warehouse">Data Warehouse</option>
                                                                <option value="BDD">Basis Data Dasar</option>
                                                                <option value="BDL">Basis Data Lanjut</option>
                                                                <option value="Big Data">Big Data</option>
                                                                <option value="Pemograman Berbasis Object">Pemograman
                                                                    Berbasis Object</option>
                                                                <option value="Game">Game</option>
                                                                <option value="Pemograman Berbasis Web">Pemograman
                                                                    Berbasis Web</option>
                                                                <option value="Pemograman Berbasis Framework">
                                                                    Pemograman Berbasis Framework</option>
                                                                <option value="Jaringan Komputer">Jaringan Komputer
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="kelas">Kelas</label>
                                                            <select class="form-control" name="kelas" required>
                                                                <option value="" disabled selected>Pilih Kelas
                                                                </option>
                                                                <option value="21 SI A">21 SI A</option>
                                                                <option value="21 SI B">21 SI B</option>
                                                                <option value="21 SI C">21 SI C</option>
                                                                <option value="22 SI A">22 SI A</option>
                                                                <option value="22 SI B">22 SI B</option>
                                                                <option value="22 SI C">22 SI C</option>
                                                                <option value="22 SI D">22 SI D</option>
                                                                <option value="23 SI A">23 SI A</option>
                                                                <option value="23 SI B">23 SI B</option>
                                                                <option value="23 SI C">23 SI C</option>
                                                                <option value="23 SI D">23 SI D</option>
                                                                <option value="24 SI A">24 SI A</option>
                                                                <option value="24 SI B">24 SI B</option>
                                                                <option value="24 SI C">24 SI C</option>
                                                                <option value="24 SI D">24 SI D</option>
                                                                <option value="24 SI E">24 SI E</option>
                                                                <option value="21 TI KA">21 TI KA</option>
                                                                <option value="21 TI KB">21 TI KB</option>
                                                                <option value="21 TI KC">21 TI KC</option>
                                                                <option value="21 TI C">21 TI C</option>
                                                                <option value="21 TI D">21 TI D</option>
                                                                <option value="21 TI E">21 TI E</option>
                                                                <option value="21 TI F">21 TI F</option>
                                                                <option value="22 TI A">22 TI A</option>
                                                                <option value="22 TI B">22 TI B</option>
                                                                <option value="22 TI C">22 TI C</option>
                                                                <option value="22 TI D">22 TI D</option>
                                                                <option value="22 TI E">22 TI E</option>
                                                                <option value="22 TI F">22 TI F</option>
                                                                <option value="23 TI A">23 TI A</option>
                                                                <option value="23 TI B">23 TI B</option>
                                                                <option value="23 TI C">23 TI C</option>
                                                                <option value="23 TI D">23 TI D</option>
                                                                <option value="23 TI E">23 TI E</option>
                                                                <option value="23 TI F">23 TI F</option>
                                                                <option value="24 TI A">24 TI A</option>
                                                                <option value="24 TI B">24 TI B</option>
                                                                <option value="24 TI C">24 TI C</option>
                                                                <option value="24 TI D">24 TI D</option>
                                                                <option value="24 TI E">24 TI E</option>
                                                                <option value="24 TI F">24 TI F</option>
                                                                <option value="24 TI SW">24 TI SW</option>
                                                                <option value="21 TRK">21 TRK</option>
                                                                <option value="22 TRK A">22 TRK A</option>
                                                                <option value="22 TRK B">22 TRK B</option>
                                                                <option value="23 TRK A">23 TRK A</option>
                                                                <option value="23 TRK B">23 TRK B</option>
                                                                <option value="24 TRK A">24 TRK A</option>
                                                                <option value="24 TRK B">24 TRK B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end mt-4">
                                                    <button type="button" class="btn btn-secondary me-2"
                                                        onclick="window.history.back()">Tutup</button>
                                                    <button type="submit" class="btn btn-linkedin">Cari Data</button>
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
