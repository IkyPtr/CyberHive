<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>Data Koordinator</title>
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
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #0077b5 !important;
            box-shadow: 0 0 0 0.2rem rgba(0, 119, 181, 0.25) !important;
        }

        .table-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 30px;
        }
        /* Background gradasi dan desain body */
        body {
            font-family: "Arial", sans-serif;
            background: linear-gradient(to bottom, #ffffff, #f0f8ff);
            margin: 0;
            padding: 0;
        }

        @media print {
            body {
                width: 21cm;
                height: 29.7cm;
                margin: 30mm 45mm 30mm 45mm;
                font-family: "Times New Roman", serif;
                font-size: 12pt;
                background: none; /* Menghilangkan background saat mencetak */
            }

            .no-print {
                display: none;
            }

            table {
                width: 80%;  /* Atur lebar tabel sesuai kebutuhan */
                margin: 0 auto;  /* Agar tabel terpusat */
                border-collapse: collapse;
                margin-top: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  /* Menambahkan shadow pada tabel */
            }

            th, td {
                border: 1px solid #ccc;  /* Ganti border hitam dengan warna abu-abu lebih soft */
                padding: 10px;
                text-align: center;
                font-size: 12pt;
            }

            th {
                background-color: #4CAF50;
                color: white;
                font-weight: bold;
            }

            .header {
                text-align: center;
                margin-bottom: 30px;
            }

            .logo {
                width: 120px;
                margin-bottom: 20px;
            }

            .title {
                font-size: 18pt;
                font-weight: bold;
                color: #396cab;  /* Warna biru pada judul */
                margin: 20px 0;
            }

            .signature {
                margin-top: 50px;
                text-align: right;
            }

            .signature p {
                margin: 0;
                font-size: 12pt;
            }
        }

        /* Style untuk tampilan di layar */
        @media screen {
            body {
                font-family: "Arial", sans-serif;
                font-size: 14px;
            }

            .no-print {
                margin-top: 20px;
                padding: 10px 15px;
                background-color: #396cab;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

            }

            .no-print:hover {
                background-color: #454ea0;
            }
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
                        <a class="opacity-5 text-dark" href="javascript:;">Dokumen Pinjam LAB</a>
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
                <div class="container d-flex justify-content-center">
                    <div class="row pt-610 justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column align-items-center">
                            <div class="card card-plain mt-100">
                                <div class="container-fluid py-2">
                                    <div class="card">
                                        <div class="card-header pb-0 px-3">
                                            <div class="text-left mb-4">
                                                <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" alt="PCR Logo"
                                                    class="img-fluid mt-n4 mb-2" style="max-height: 80px; width: auto;">
                                                <h6 class="mb-0">Data Koordinator</h6>
                                            </div>
                                        </div>
                                        <div class="card-body pt-4 p-3">
                                            <div class="table-container">
                                                <table>
                                                    <tr>
                                                        <th>NAMA</th>
                                                        <th>TANGGAL</th>
                                                        <th>RUANG LAB</th>
                                                        <th>KETERANGAN</th>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ $koordinator->nama }}</td>
                                                        <td>{{ $koordinator->tanggal_mulai }}</td>
                                                        <td>{{ $koordinator->labs->first()->ruang_lab ?? '-' }}</td>
                                                        <td>{{ $koordinator->Keterangan_status }}</td>
                                                    </tr>
                                                </table>
                                                </table>

                                                <div class="signature">
                                                    <p>TANDA TANGAN</p>
                                                    <br><br><br>
                                                    <p>ADMIN/KALAB</p>
                                                </div>

                                                <button onclick="window.print()" class="no-print">Print Laporan</button>
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
