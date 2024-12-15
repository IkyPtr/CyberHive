@extends('layouts.app')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                    CyberHive
                </li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">Manajemen Lab JTI Politeknik Caltex Riau</h6>
        </nav>
    </div>
</nav>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Peserta Laboratorium</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIM/NIP</th>
                            <th>Kelas</th>
                            <th>Nomor PC</th>
                            <th>Ruang Lab</th>
                            <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Keluar</th>
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
                        @foreach($peserta as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->nim_nip }}</td>
                            <td>{{ $p->kelas }}</td>
                            <td>{{ $p->nomor_pc }}</td>
                            <td>{{ $p->ruang_lab }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td>{{ $p->jam_masuk }}</td>
                            <td>{{ $p->jam_keluar }}</td>
                            <td>{{ $p->monitor }}</td>
                            <td>{{ $p->keyboard }}</td>
                            <td>{{ $p->mouse }}</td>
                            <td>{{ $p->jaringan }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>{{ $p->alat }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('peserta.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('peserta.destroy', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                <a href="{{ url('/peserta/create') }}" class="btn btn-primary">Tambah Peserta</a>
            </div>
        </div>
    </div>
</div>
@endsection
