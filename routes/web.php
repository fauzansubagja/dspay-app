<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RekapitulasiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
Route::get('/management/tahunajaran', [ManajemenController::class, 'index']);
Route::get('/management/kelas', [KelasController::class, 'index']);
Route::get('/management/siswa', [SiswaController::class, 'index']);
Route::get('/management/kelulusan', [KelulusanController::class, 'index']);
Route::get('/management/kenaikan', [KenaikanController::class, 'index']);
Route::get('/admin/user', [UserController::class, 'index']);
Route::get('/admin/laporan/rekapitulasi', [RekapitulasiController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/kalender', function () {
    return view('admin.kalender');
});
Route::get('/keuangan', function () {
    return view('admin.laporan.keuangan');
});
// Route::get('/user', function () {
//     return view('admin.user');
// });
// Route::get('/tahunajaran', function () {
//     return view('admin.manajemen.tahunajaran');
// });
// Route::get('/kelas', function () {
//     return view('admin.manajemen.kelas');
// });
// Route::get('/siswa', function () {
//     return view('admin.manajemen.siswa');
// });
// Route::get('/kelulusan', function () {
//     return view('admin.manajemen.kelulusan');
// });
// Route::get('/kenaikan', function () {
//     return view('admin.manajemen.kenaikan');
// });
// Route::get('/rekapitulasi', function () {
//     return view('admin.laporan.rekapitulasi');
// });

// belum dikerjakan
// setting