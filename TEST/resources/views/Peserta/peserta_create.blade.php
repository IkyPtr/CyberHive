<!DOCTYPE html>
<html>
<head>
    <title>Create Peserta</title>
    <link href="{{ asset('public/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Form Peserta</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('peserta.store') }}" method="POST">
                    @csrf
                    <div class="row">
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
                                <input type="text" name="kelas" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nomor PC</label>
                                <input type="number" name="nomor_pc" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Ruang Lab</label>
                                <select name="ruang_lab" class="form-control" required>
                                    <option value="Lab 1">Lab 1</option>
                                    <option value="Lab 2">Lab 2</option>
                                    <option value="Lab 3">Lab 3</option>
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
                                <label>Kondisi Alat</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Monitor</label>
                                        <select name="monitor" class="form-control" required>
                                            <option value="Baik">Baik</option>
                                            <option value="Rusak">Rusak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Keyboard</label>
                                        <select name="keyboard" class="form-control" required>
                                            <option value="Baik">Baik</option>
                                            <option value="Rusak">Rusak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Mouse</label>
                                        <select name="mouse" class="form-control" required>
                                            <option value="Baik">Baik</option>
                                            <option value="Rusak">Rusak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jaringan</label>
                                        <select name="jaringan" class="form-control" required>
                                            <option value="Baik">Baik</option>
                                            <option value="Rusak">Rusak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Alat yang Dipinjam</label>
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
</body>
</html>
