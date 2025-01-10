<!DOCTYPE html>
<html>
<head>
    <title>Laporan Koordinator</title>
    <style>
        @media print {
            body {
                width: 21cm;
                height: 29.7cm;
                margin: 30mm 45mm 30mm 45mm;
                font-family: "Times New Roman", serif;
            }

            .no-print {
                display: none;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            .header {
                text-align: center;
                margin-bottom: 30px;
            }

            .logo {
                width: 150px;
                margin-bottom: 20px;
            }

            .title {
                font-size: 16pt;
                font-weight: bold;
                margin: 20px 0;
            }

            .signature {
                margin-top: 50px;
                text-align: right;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('public/assets/img/LOGO-PCR.png') }}" style="width: 100px; margin-bottom: 20px;">
        <div class="title">MANAJEMEN LAB JTI PCR</div>
    </div>

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
            <td>{{ $koordinator->labs->first()->ruang_lab }}</td>
            <td>{{ $koordinator->keterangan_status }}</td>
        </tr>
    </table>

    <div class="signature">
        <p>TANDA TANGAN</p>
        <br><br><br>
        {{-- <p>{{ Auth::user()->name }}</p> --}}
        <p>ADMIN/KALAB</p>
    </div>

    <button onclick="window.print()" class="no-print">Print Laporan</button>
</body>
</html>
