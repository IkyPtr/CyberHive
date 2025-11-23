<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>Data Index Teknisi</title>
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

        .table th,
        .table td {
            font-size: 14px;
            padding: 10px;
            text-align: center;
            vertical-align: upper;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #0077b5 !important;
            box-shadow: 0 0 0 0.2rem rgba(0, 119, 181, 0.25) !important;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 12px;
        }

        .table-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;

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
                        <a class="opacity-5 text-dark" href="javascript:;">Index TEKNISI</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                        CyberHive
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0 text-capitalize">Manajemen Lab JTI Politeknik Caltex Riau</h6>
            </nav>
        </div>
    </nav>
    <div class="border-radius-x1 mt-1 mx-1 position-relative vh-100"
        style="background-image: url('{{ asset('public/assets/img/vr-bg.jpg') }}') ; background-size: cover;">
        <main class="main-content position-relative border-radius-lg d-flex align-items-center justify-content-center">
            <div class="section min-vh-50 position-relative transform-scale-1 transform-scale-md-8">
                <div class="container d-flex justify-content-start">
                    <div class="row pt-610 justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-100">
                                <div class="container-fluid py-4">
                                    <div class="card">
                                        <div class="card-header pb-0 px-3">
                                            <div class="text-left mb-4">
                                                <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                                    class="img-fluid mt-n4 mb-2" style="max-height: 60px; width: auto;">
                                                <h6 class="mb-0">Data komponen lab yang rusak</h6>
                                            </div>
                                        </div>
                                        <div class="card-body pt-4 p-3">
                                            <div class="table-container">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Ruang Lab</th>
                                                            <th>Nomor PC</th>
                                                            <th>Monitor</th>
                                                            <th>Keyboard</th>
                                                            <th>Mouse</th>
                                                            <th>Jaringan</th>
                                                            <th>Keterangan</th>
                                                            <th>Status</th>
                                                            <th>Tanggal Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($labs as $lab)
                                                            @if ($lab->monitor == 'Rusak' || $lab->keyboard == 'Rusak' || $lab->mouse == 'Rusak' || $lab->jaringan == 'Rusak')
                                                                <tr>
                                                                    <td>{{ $lab->ruang_lab }}</td>
                                                                    <td>{{ $lab->nomor_pc }}</td>
                                                                    <td>
                                                                        @if ($lab->monitor == 'Rusak')
                                                                            <button
                                                                                class="btn btn-danger btn-sm">Rusak</button>
                                                                        @else
                                                                            <button
                                                                                class="btn btn-success btn-sm">Baik</button>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($lab->keyboard == 'Rusak')
                                                                            <button
                                                                                class="btn btn-danger btn-sm">Rusak</button>
                                                                        @else
                                                                            <button
                                                                                class="btn btn-success btn-sm">Baik</button>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($lab->mouse == 'Rusak')
                                                                            <button
                                                                                class="btn btn-danger btn-sm">Rusak</button>
                                                                        @else
                                                                            <button
                                                                                class="btn btn-success btn-sm">Baik</button>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($lab->jaringan == 'Rusak')
                                                                            <button
                                                                                class="btn btn-danger btn-sm">Rusak</button>
                                                                        @else
                                                                            <button
                                                                                class="btn btn-success btn-sm">Baik</button>
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $lab->keterangan }}</td>
                                                                    <td>
                                                                        @if ($lab->status == '-')
                                                                            <button class="btn btn-light btn-sm">Belum
                                                                                di periksa</button>
                                                                        @elseif($lab->status == 'Pending')
                                                                            <button
                                                                                class="btn btn-warning btn-sm">Dipending</button>
                                                                        @else
                                                                            {{ $lab->status }}
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $lab->tanggal_status }}</td>
                                                                    {{-- <form
                                                                            action="{{ route('teknisi.destroy', $lab->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm">Hapus</button>
                                                                        </form> --}}
                                                                    <td>
                                                                        <div class="d-inline-flex">
                                                                            <form
                                                                                action="{{ route('teknisi.update', $lab->id) }}"
                                                                                method="POST" class="me-2">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <button type="submit" name="status"
                                                                                    value="Pending"
                                                                                    class="btn btn-warning btn-sm">Pending</button>
                                                                            </form>
                                                                            <form
                                                                                action="{{ route('teknisi.update', $lab->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <button type="submit" name="status"
                                                                                    value="Selesai"
                                                                                    class="btn btn-success btn-sm">Selesai</button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
