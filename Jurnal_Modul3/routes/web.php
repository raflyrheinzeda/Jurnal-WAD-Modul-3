<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\profileController;
# 1. Import controller yang akan digunakan


# 2. Tambahkan route untuk halaman dashboard dengan metode GET yang memanggil fungsi index() dari DashboardController.
# 3. Tambahkan route untuk halaman profil dengan metode GET yang memanggil fungsi index() dari ProfileController.
route::get('/',[DashboardController::class, 'Index']);
route::get('/profil',[profileController::class, 'Index']);
