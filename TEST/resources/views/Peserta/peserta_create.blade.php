<!DOCTYPE html>
<html lang="en">

<head>
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
            height: 100vh;
            position: fixed;
            width: 100%;
        }


        .main-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
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

        .row {
            margin-bottom: 0.5rem !important;
        }

        .form-group {
            margin-bottom: 0.5rem;
        }

        .mb-3 {
            margin-bottom: 0.5rem !important;
        }

        .card-body {
            padding: 1rem;
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
                        <a class="opacity-5 text-dark" href="javascript:;">Input Data Peserta</a>
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
    <div class="border-radius-x1 mt-1 mx-1 position-relative vh-100"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <main class="main-content">
            <div class="container-fluid py-4">
                <div class="row justify-content-center align-items-center min-vh-85">
                    <div class="col-lg-8 col-md-10">
                        <div class="card mx-auto">
                            <div class="card-header pb-0 px-3">
                                <div class="card-header pb-0">
                                    <div class="text-left mb-4">
                                        <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                            class="img-fluid mt-n4 mb-2" style="max-height: 60px; width: auto;">
                                        <h6 class="mb-0">{{ __('Form Logbook Peserta') }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('peserta.store') }}" method="POST" role="form text-left">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control"
                                                    placeholder="Inputkan nama anda" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIM/NIP</label>
                                                <input type="text" name="nim_nip" class="form-control"
                                                    placeholder="0XXXXXXX" required>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nomor PC</label>
                                                <select name="nomor_pc" class="form-control" required>
                                                    @for ($i = 1; $i <= 40; $i++)
                                                        <option value="{{ $i }}">{{ $i }}
                                                        </option>
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

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kondisi Monitor</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="monitor"
                                                            value="Baik" required>
                                                        <label class="form-check-label">Baik</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="monitor"
                                                            value="Rusak" required>
                                                        <label class="form-check-label">Rusak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kondisi Keyboard</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="keyboard" value="Baik" required>
                                                        <label class="form-check-label">Baik</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="keyboard" value="Rusak" required>
                                                        <label class="form-check-label">Rusak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kondisi Mouse</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="mouse"
                                                            value="Baik" required>
                                                        <label class="form-check-label">Baik</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="mouse"
                                                            value="Rusak" required>
                                                        <label class="form-check-label">Rusak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kondisi Jaringan</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="jaringan" value="Baik" required>
                                                        <label class="form-check-label">Baik</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="jaringan" value="Rusak" required>
                                                        <label class="form-check-label">Rusak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"
                                                    placeholder="Tambahkan keterangan jika ada"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alat</label>
                                                <textarea class="form-control" id="alat" name="alat" rows="3"
                                                    placeholder="Sebutkan alat yang digunakan"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end mt-4">
                                        <button type="button" class="btn btn-secondary"
                                            onclick="window.history.back()">Tutup</button>
                                        <button type="submit" class="btn btn-linkedin">Simpan</button>
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
