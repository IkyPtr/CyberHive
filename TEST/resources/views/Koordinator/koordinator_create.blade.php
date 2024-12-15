<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>Form Input Koordinator</title>
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
        body {
            overflow: hidden;
            height: 100vh;
            position: fixed;
            width: 100%;
        }

        .card {
            width: 120%;
            max-width: 1200px;
            margin: 70px auto;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .min-vh-100 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding-top: 1.5rem;
        }

        @media (max-width: 1200px) {
            .card {
                width: 110%;
                margin-left: 0%;
            }
        }

        @media (max-width: 992px) {
            .card {
                width: 110%;
                margin-left: 0;
            }
        }

        .container-fluid {
            padding: 0 20px;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">Input Data Koordinator</a>
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
    <div class="border-radius-x1 mt-1 mx-1 position-relative vh-100"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <main class="main-content">
            <div class="container-fluid py-4">
                <div class="row justify-content-center align-items-center min-vh-85">
                    <div class="col-lg-8 col-md-10">
                        {{-- <br><br><br><br> --}}
                        <div class="card mx-auto">
                            <div class="card-header pb-0 px-3">
                                <div class="card-header pb-0">
                                    <div class="text-left mb-4">
                                        <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                            class="img-fluid mt-n4 mb-2" style="max-height: 60px; width: auto;">
                                        <h6 class="mb-0">{{ __('Form Input Data Koordinator') }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 p-4">
                                <form action="/submit" method="POST" role="form text-left">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="no_ruangan">Nomor Ruangan</label>
                                                <input class="form-control" type="text" id="no_ruangan"
                                                    name="no_ruangan">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input class="form-control" type="text" id="nama"
                                                    name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nim_nip">NIM/NIP</label>
                                                <input class="form-control" type="text" id="nim_nip"
                                                    name="nim_nip">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="no_hp">No HP</label>
                                                <input class="form-control" type="text" id="no_hp"
                                                    name="no_hp">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" id="email"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kegiatan">Kegiatan</label>
                                                <input class="form-control" type="text" id="kegiatan"
                                                    name="kegiatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                                <input class="form-control" type="date" id="tanggal_mulai"
                                                    name="tanggal_mulai">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tanggal_selesai">Tanggal Selesai</label>
                                                <input class="form-control" type="date" id="tanggal_selesai"
                                                    name="tanggal_selesai">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="jam_masuk">Jam Masuk</label>
                                                <input class="form-control" type="time" id="jam_masuk"
                                                    name="jam_masuk">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="jam_keluar">Jam Keluar</label>
                                                <input class="form-control" type="time" id="jam_keluar"
                                                    name="jam_keluar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="jumlah_peserta">Jumlah Peserta</label>
                                                <input class="form-control" type="number" id="jumlah_peserta"
                                                    name="jumlah_peserta">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="alat">Alat</label>
                                                <input class="form-control" type="text" id="alat"
                                                    name="alat">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea class="form-control" id="keterangan" name="keterangan" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-secondary me-2"
                                            onclick="window.history.back()">Tutup</button>
                                        <button type="submit" class="btn btn-linkedin">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Core JS Files -->
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
</body>

</html>
