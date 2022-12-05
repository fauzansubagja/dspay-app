<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\KeuanganController;
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
// AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// // TAHUN AJARAN
// // Route::resource('/management/periode', PeriodeController::class)->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
Route::resource('/management/periode', PeriodeController::class);
Route::resource('/management/kelas', KelasController::class);
Route::resource('management/siswa', SiswaController::class);
Route::get('/management/kelulusan', [KelulusanController::class, 'index']);
Route::get('/management/kenaikan', [KenaikanController::class, 'index']);
Route::get('/management/kenaikan', [KenaikanController::class, 'index']);
Route::get('/admin/laporan/keuangan', [KeuanganController::class, 'index']);
Route::get('/admin/laporan/rekapitulasi', [RekapitulasiController::class, 'index']);
Route::get('/management/user', [UserController::class, 'index']);

Route::get('/kelas', function () {
    return view('admin.manajemen.kelas');
});