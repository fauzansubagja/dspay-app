<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeriodeController;
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
// AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// // TAHUN AJARAN
// // Route::resource('/management/periode', PeriodeController::class)->middleware('auth');


// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
// // Route::get('/management/tahunajaran', [ManajemenController::class, 'index']);
// Route::resource('/management/kelas', KelasController::class);
// Route::resource('management/siswa', SiswaController::class);
// Route::get('/management/kelulusan', [KelulusanController::class, 'index']);
// Route::get('/management/kenaikan', [KenaikanController::class, 'index']);
// Route::get('/admin/user', [UserController::class, 'index']);
// Route::get('/admin/laporan/rekapitulasi', [RekapitulasiController::class, 'index']);

Route::get('/kalender', function () {
    return view('admin.kalender');
});
Route::get('/keuangan', function () {
    return view('admin.laporan.keuangan');
});
Route::get('/profile', function () {
    return view('admin.profile');
});

// mulai
Route::get('/add-periode', function () {
    return view('admin.manajemen.tahunajaran.create');
});
Route::get('/periode', function () {
    return view('admin.manajemen.tahunajaran.index');
});

Route::get('/kelas', function () {
    return view('admin.manajemen.kelas.index');
});
Route::get('/add-kelas', function () {
    return view('admin.manajemen.kelas.create');
});
Route::get('/siswa', function () {
    return view('admin.manajemen.siswa.index');
});
Route::get('/add-siswa', function () {
    return view('admin.manajemen.siswa.create');
});
Route::get('/detail-siswa', function () {
    return view('admin.manajemen.siswa.detail');
});

Route::get('/pembayaran', function () {
    return view('admin.pembayaran');
});
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