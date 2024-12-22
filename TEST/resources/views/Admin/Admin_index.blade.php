<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>Data Admin</title>
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
        width: 100%;
    }
    .table th, .table td {
        font-size: 14px;
        padding: 10px;
        text-align: center;
    }
    .form-control:focus, .form-select:focus {
        border-color: #0077b5 !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 119, 181, 0.25) !important;
    }

    .table-container {
        max-width: 100%; /* 100% width, use the full width */
        margin: 0 auto; /* Center the table */
        padding: 30px; /* More padding around the table */
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
                        <a class="opacity-5 text-dark" href="javascript:;">Index Admin</a>
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
        style="width: calc(100% - 785px); margin-right: 785px;">
            <div class="section min-vh-50 position-relative transform-scale-1 transform-scale-md-8">
                <div class="container d-flex justify-content-start">
                    <div class="row pt-610 justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column mx-auto"> <!-- Changed to 12 for full-width -->
                            <div class="card card-plain mt-100">
                                <div class="container-fluid py-4">
                                    <div class="card">
                                        <div class="card-header pb-0 px-3">
                                            <div class="text-left mb-4">
                                                <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                                    class="img-fluid mt-n4 mb-2" style="max-height: 60px; width: auto;">
                                                <h6 class="mb-0">Data Logbook Mahasiswa</h6>
                                            </div>
                                        </div>
                                        <div class="card-body pt-4 p-3">
                                            <div class="table-container">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>NIM</th>
                                                            <th>No PC</th>
                                                            <th>Ruang Lab</th>
                                                            <th>No Loker</th>
                                                            <th>Kelas</th>
                                                            <th>Tanggal</th>
                                                            <th>Jam Masuk</th>
                                                            <th>Monitor</th>
                                                            <th>Keyboard</th>
                                                            <th>Mouse</th>
                                                            <th>Jaringan</th>
                                                            <th>Keterangan</th>
                                                            <th>Alat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($matchingData as $key => $data)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ $data->nama }}</td>
                                                                <td>{{ $data->nim }}</td>
                                                                <td>{{ $data->nomor_pc }}</td>
                                                                <td>{{ $data->ruang_lab }}</td>
                                                                <td>{{ $data->no_loker }}</td>
                                                                <td>{{ $data->kelas }}</td>
                                                                <td>{{ $data->tanggal }}</td>
                                                                <td>{{ $data->jam_masuk }}</td>
                                                                <td>
                                                                    @if($data->monitor == 'Baik')
                                                                        <button class="btn btn-success btn-sm">Baik</button>
                                                                    @else
                                                                        <button class="btn btn-danger btn-sm">Rusak</button>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($data->keyboard == 'Baik')
                                                                        <button class="btn btn-success btn-sm">Baik</button>
                                                                    @else
                                                                        <button class="btn btn-danger btn-sm">Rusak</button>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($data->mouse == 'Baik')
                                                                        <button class="btn btn-success btn-sm">Baik</button>
                                                                    @else
                                                                        <button class="btn btn-danger btn-sm">Rusak</button>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($data->jaringan == 'Baik')
                                                                        <button class="btn btn-success btn-sm">Baik</button>
                                                                    @else
                                                                        <button class="btn btn-danger btn-sm">Rusak</button>
                                                                    @endif
                                                                </td>
                                                                <td>{{ $data->keterangan ?? '-' }}</td>
                                                                <td>{{ $data->alat ?? '-' }}</td>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm">Edit</button>
                                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $matchingData->links() }}
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
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>
</html>
