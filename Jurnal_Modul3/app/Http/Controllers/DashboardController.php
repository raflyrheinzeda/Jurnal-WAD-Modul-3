<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import model User agar dapat digunakan di dalam controller.
use app\Models\user;
class DashboardController extends Controller
{

    public function index()
    {
        $mahasiswa = User ::first();
        $hours = date('H');
        $salam = match (true) {
            $hours >= 5 && $hours < 12 => "Selamat pagi",
            $hours >= 12 && $hours < 5 => "Selamat Siang",
            $hours >= 5 && $hours < 18 => "Selamat sore",
            default => "Selamat Malam",
        };

        $accessTime = date("H:i:s");
        return view(' Dashboard', compact('mahasiswa','salam', 'accessTime'));
        
    }

    # 7. Buat method private getTanggal() untuk menghasilkan tanggal saat ini dalam format d-m-Y.
    private function getTanggal(){
        return date('d-m-y');                                                                                                                                   
    }
}
