<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="#######################33" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor PC</label>
                        <input type="text" class="form-control" name="nomor_pc" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Loker</label>
                        <input type="text" class="form-control" name="no_loker" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ruang Lab</label>
                        <input type="text" class="form-control" name="ruang_lab" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Matakuliah</label>
                        <input type="text" class="form-control" name="matakuliah" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Dosen</label>
                        <input type="text" class="form-control" name="dosen" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">AIL</label>
                        <input type="text" class="form-control" name="ail" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Masuk</label>
                        <input type="time" class="form-control" name="jam_masuk" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Keluar</label>
                        <input type="time" class="form-control" name="jam_keluar" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Monitor</label>
                        <select class="form-select" name="monitor" required>
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mouse</label>
                        <select class="form-select" name="mouse" required>
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jaringan</label>
                        <select class="form-select" name="jaringan" required>
                            <option value="Baik">Baik</option>
                            <option value="Bermasalah">Bermasalah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alat</label>
                        <input type="text" class="form-control" name="alat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
