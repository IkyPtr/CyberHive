<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Data Anggota CyberHive</title>

    <!-- CSS Files -->
    <link href="{{ asset('public/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="container-fluid py-4">
            <div class="card">
                <h5 class="card-header">Tambah Data Anggota CyberHive</h5>
                <div class="card-body">
                    <form action="{{ route('identitas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-1 mb-3">
                            <label for="foto">Foto Anggota (jpg,jpeg,png)</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                        </div>

                        <div class="form-group mt-1 mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>

                        <div class="form-group mt-1 mb-3">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur') }}">
                            <span class="text-danger">{{ $errors->first('umur') }}</span>
                        </div>

                        <div class="form-group mt-1 mb-3">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                            <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                        </div>

                        <div class="form-group mt-1 mb-3">
                            <label for="motivasi">Motivasi</label>
                            <textarea class="form-control @error('motivasi') is-invalid @enderror" id="motivasi" name="motivasi" rows="3">{{ old('motivasi') }}</textarea>
                            <span class="text-danger">{{ $errors->first('motivasi') }}</span>
                        </div>

                        <button type="submit" class="btn bg-gradient-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Core JS Files -->
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
</body>
</html>
