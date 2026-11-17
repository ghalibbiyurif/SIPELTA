<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/admin', [PageController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/tren-pelanggaran', [PageController::class, 'adminViolationTrends'])
    ->name('admin.trends');
Route::get('/guru', [PageController::class, 'guruDashboard'])->name('guru.dashboard');
Route::get('/guru/{page}', [PageController::class, 'guruPage'])
    ->whereIn('page', ['catat-keterlambatan', 'periksa-barang', 'verifikasi-laporan', 'riwayat-pelanggaran'])
    ->name('guru.page');
Route::get('/osis', [PageController::class, 'osisDashboard']);
Route::get('/data-master', [PageController::class, 'dataMaster']);
