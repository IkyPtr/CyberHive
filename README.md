# CyberHive

Proyek Manajemen Lab JTI PCR Semester 3

##  Deskripsi Proyek

CyberHive adalah aplikasi berbasis web yang digunakan untuk mengelola proses peminjaman dan pengembalian fasilitas laboratorium di lingkungan Jurusan Teknik Informatika. Sistem ini dirancang untuk membantu admin, koordinator, teknisi, dan peserta dalam mengelola data laboratorium secara terstruktur dan efisien.

##  Tujuan Sistem

* Mempermudah proses reservasi dan peminjaman ruangan atau alat lab
* Mengurangi kesalahan pencatatan secara manual
* Membantu monitoring data peminjaman dan pengembalian
* Mempercepat proses validasi dan pelaporan

##  Fitur Utama

* CRUD Data Peserta, Koordinator, Teknisi, Admin
* Manajemen Reservasi Peminjaman Lab
* Sistem login multi-role
* Notifikasi status peminjaman
* Pengujian fitur menggunakan PHPUnit (Feature Test & Unit Test)
* Deploy menggunakan Vercel

##  Teknologi yang Digunakan

| Teknologi     | Keterangan         |
| ------------- | ------------------ |
| PHP (Laravel) | Backend & Routing  |
| MySQL         | Database           |
| Vercel        | Deploy Frontend    |
| PHPUnit       | Pengujian Aplikasi |
| GitHub        | Version Control    |
| VSCode        | Text Editor        |

##  Struktur Proyek (Singkat)

```
CyberHive/
│   README.md
│   composer.json
│   vite.config.js
│
├── app/
│   ├── Http/Controllers
│   ├── Models
│   └── Tests
│
├── database/
├── public/
├── resources/
├── routes/
└── tests/
```

##  Pengujian & Uji Coba

Pengujian dilakukan menggunakan **PHPUnit**, contoh test file:

```
tests/Feature/PesertaTest.php
```

Menjalankan test:

```bash
php artisan test
```

## 🕸️ Link Demo Deploy

🔗 LINK BELUM TERSEDIA, NAMUN ANDA BISA JALANKAN DI LOCALHOST, SILAHKAN CLONE TERLEBIH DAHULU

##  Developer

Dibuat oleh Rezki Saputra, M. Abyaz Shadiq, Aqila Wafiah dan Helfia Giska Renata

---

Terima kasih telah mengunjungi repository ini. Silakan fork, star ⭐, atau pull request jika ingin berkontribusi!
