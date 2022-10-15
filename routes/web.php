<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/home1', function () {
    return view('admin.pembayaran');
});
Route::get('/user', function () {
    return view('admin.user');
});
Route::get('/tahunajaran', function () {
    return view('admin.manajemen.tahunajaran');
});
Route::get('/kelas', function () {
    return view('admin.manajemen.kelas');
});
Route::get('/siswa', function () {
    return view('admin.manajemen.siswa');
});
Route::get('/kelulusan', function () {
    return view('admin.manajemen.kelulusan');
});
Route::get('/kenaikan', function () {
    return view('admin.manajemen.kenaikan');
});
Route::get('/rekapitulasi', function () {
    return view('admin.laporan.rekapitulasi');
});

// belum dikerjakan
// setting
// laporan keuangan
// kalender