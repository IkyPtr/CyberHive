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
    <title>Form Peserta</title>
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
                            <h6 class="mb-0">Form Peserta</h6>
                        </div>
                        <div class="card-body">
                            <form action="/submit" method="POST" role="form text-left">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>NIM/NIP</label>
                                            <input type="text" name="nim_nip" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="ruang_lab" class="form-control" required>
                                                <option value="1">21 SI A</option>
                                                <option value="2">21 SI B</option>
                                                <option value="3">21 SI C</option>
                                                <option value="4">22 SI A</option>
                                                <option value="5">22 SI B</option>
                                                <option value="6">22 SI C</option>
                                                <option value="7">22 SI D</option>
                                                <option value="4">23 SI A</option>
                                                <option value="5">23 SI B</option>
                                                <option value="6">23 SI C</option>
                                                <option value="7">23 SI D</option>
                                                <option value="4">24 SI A</option>
                                                <option value="5">24 SI B</option>
                                                <option value="6">24 SI C</option>
                                                <option value="7">24 SI D</option>
                                                <option value="7">24 SI E</option>
                                                <option value="16">24 TI A</option>
                                                <option value="17">24 TI B</option>
                                                <option value="18">24 TI C</option>
                                                <option value="19">24 TI D</option>
                                                <option value="20">24 TI E</option>
                                                <option value="21">24 TI F</option>
                                                <option value="22">24 TI G</option>
                                                <option value="16">23 TI A</option>
                                                <option value="17">23 TI B</option>
                                                <option value="18">23 TI C</option>
                                                <option value="19">23 TI D</option>
                                                <option value="20">23 TI E</option>
                                                <option value="21">23 TI F</option>
                                                <option value="16">22 TI A</option>
                                                <option value="17">22 TI B</option>
                                                <option value="18">22 TI C</option>
                                                <option value="19">22 TI D</option>
                                                <option value="20">22 TI E</option>
                                                <option value="21">22 TI F</option>
                                                <option value="16">21 TI KA</option>
                                                <option value="17">21 TI KB</option>
                                                <option value="18">21 TI KC</option>
                                                <option value="19">21 TI C</option>
                                                <option value="19">21 TI D</option>
                                                <option value="20">21 TI E</option>
                                                <option value="21">21 TI F</option>
                                                <option value="23">24 TRK A</option>
                                                <option value="24">24 TRK B</option>
                                                <option value="25">23 TRK A</option>
                                                <option value="26">23 TRK B</option>
                                                <option value="27">22 TRK A</option>
                                                <option value="28">22 TRK B</option>
                                                <option value="29">21 TRK</option>
                                                <option value="30">24 HMKD</option>
                                                <option value="31">23 TMS A</option>
                                                <option value="31">22 TMS B</option>
                                                <option value="32">23 TRJT A</option>
                                                <option value="33">23 TRJT B</option>
                                                <option value="34">22 TRJT A</option>
                                                <option value="35">22 TRJT B</option>
                                                <option value="36">24 BD</option>
                                                <option value="37">24 MTTK A</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor PC</label>
                                            <select name="ruang_lab" class="form-control" required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ruang Lab</label>
                                            <select name="ruang_lab" class="form-control" required>
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
                                                <option value="318">319</option>
                                                <option value="320">320</option>
                                                <option value="324">324</option>
                                                <option value="325">325</option>
                                                <option value="329">329</option>
                                                <option value="330">330</option>
                                                <option value="352">352</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Masuk</label>
                                            <input type="time" name="jam_masuk" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Keluar</label>
                                            <input type="time" name="jam_keluar" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi Alat : </label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Monitor</label>
                                                    <select name="monitor" class="form-control" required>
                                                        <option value="Baik">Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Keyboard</label>
                                                    <select name="keyboard" class="form-control" required>
                                                        <option value="Baik">Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Mouse</label>
                                                    <select name="mouse" class="form-control" required>
                                                        <option value="Baik">Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Jaringan</label>
                                                    <select name="jaringan" class="form-control" required>
                                                        <option value="Baik">Bagus</option>
                                                        <option value="Rusak">Rusak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" class="form-control" rows="2"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Alat</label>
                                            <input type="text" name="alat" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-secondary"
                                        onclick="window.history.back()">Tutup</button>
                                    <button type="submit" class="btn btn-linkedin btn-primary">Simpan</button>
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
