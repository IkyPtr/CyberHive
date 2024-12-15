<!DOCTYPE html>
<html lang="en">

<head
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
    <title>Form Logbook Peserta</title>
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
            background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}');
            background-size: cover;
        }

        .main-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-height: 80vh;
            overflow-y: auto;
            background: rgba(255, 255, 255, 0.95);
        }

        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="main-container g-sidenav-show bg-gray-100">
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
    <div class="content-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-30">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">Form Logbook Peserta</h6>
                        </div>
                        <div class="card-body">
                            <form action="/submit" method="POST" role="form text-left">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>NIM/NIP</label>
                                            <input type="text" name="nim_nip" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nomor PC</label>
                                            <select name="nomor_pc" class="form-control" required>
                                                @for($i = 1; $i <= 40; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ruangan Lab</label>
                                            <select name="ruang_lab" class="form-control" required>
                                                <option value="" disabled selected>Pilih Lab</option>
                                                <option value="152">152</option>
                                                <option value="156">156</option>
                                                <option value="225">225</option>
                                                <option value="252">252</option>
                                                <option value="256">256</option>
                                                <option value="281">281</option>
                                                <option value="282">282</option>
                                                <option value="283">283</option>
                                                <option value="284">284</option>
                                                <option value="313">313</option>
                                                <option value="316">316</option>
                                                <option value="317">317</option>
                                                <option value="319">319</option>
                                                <option value="320">320</option>
                                                <option value="324">324</option>
                                                <option value="325">325</option>
                                                <option value="329">329</option>
                                                <option value="330">330</option>
                                                <option value="352">352</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jam Masuk</label>
                                            <input type="time" name="jam_masuk" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jam Keluar</label>
                                            <input type="time" name="jam_keluar" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="kelas" class="form-control" required>
                                                <option value="" disabled selected>Pilih Kelas</option>
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

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Monitor</label>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="monitor" value="Baik" required>Bagus
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="monitor" value="Rusak" required>Rusak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Keyboard</label>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="keyboard" value="Baik" required>Bagus
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="keyboard" value="Rusak" required>Rusak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mouse</label>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="mouse" value="Baik" required>Bagus
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="mouse" value="Rusak" required>Rusak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jaringan</label>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="jaringan" value="Baik" required>Bagus
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="jaringan" value="Rusak" required>Rusak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alat</label>
                                            <input type="text" name="alat" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</form>
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
