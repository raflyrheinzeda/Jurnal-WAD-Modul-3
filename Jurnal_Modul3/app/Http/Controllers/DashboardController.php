<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import model User agar dapat digunakan di dalam controller.

class DashboardController extends Controller
{

    public function index()
    {
        # 2. Ambil satu data mahasiswa dari model User menggunakan fungsi first().
        # 3. Tambahkan logika untuk menentukan ucapan salam
        # 4. Buat variabel untuk menampilkan waktu akses dalam format H:i:s.
        # 5. Buat variabel untuk memanggil method getTanggal() pastikan nomor 7 sudah dikerjakan terlebih dahulu.
        # 6. Kirim data ke view dashboard menggunakan fungsi compact().
    }

    # 7. Buat method private getTanggal() untuk menghasilkan tanggal saat ini dalam format d-m-Y.
}
