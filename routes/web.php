<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dataUmumController;
use App\Http\Controllers\dataKhususController;
use App\Http\Controllers\dataUmumAdminUtamaController;
use App\Http\Controllers\dataKhususAdminUtamaController;
use App\Http\Controllers\manajemenUserOpdController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//publik
Route::prefix('/')->group(function () {
    Route::get('', [loginController::class, 'index'])->name('login');
    Route::post('/admin/login', [loginController::class, 'auth']);
    Route::get('/admin/logout', [loginController::class, 'logout'])->middleware('auth');
    Route::get('/admin/dashboard', [dataUmumController::class, 'index'])->name('home')->middleware('auth');
    Route::get('/admin/profil', [dataUmumController::class, 'profil'])->middleware('auth');
    Route::get('/admin/profil/ubah', [dataUmumController::class, 'ubahProfil'])->middleware('auth');
});

//data-umum
Route::prefix('admin/data-umum')->group(function () {
    Route::get('/pegawai', [dataUmumController::class, 'pegawai'])->middleware('auth');
    Route::get('/pegawai/tambah', [dataUmumController::class, 'tambahPegawai'])->middleware('auth');
    Route::get('/pegawai/ubah', [dataUmumController::class, 'ubahPegawai'])->middleware('auth');
    Route::get('/kantor', [dataUmumController::class, 'kantor'])->middleware('auth');
    Route::get('/kantor/ubah', [dataUmumController::class, 'ubahKantor'])->middleware('auth');
    Route::get('/webaplikasi', [dataUmumController::class, 'webaplikasi'])->middleware('auth');
    Route::get('/webaplikasi/tambah', [dataUmumController::class, 'tambahWebaplikasi'])->middleware('auth');
    Route::get('/webaplikasi/ubah', [dataUmumController::class, 'ubahWebaplikasi'])->middleware('auth');
});

//data-khusus litbang
Route::prefix('admin/data-khusus')->group(function () {
    Route::get('/buku', [dataKhususController::class, 'buku'])->middleware('auth');
    Route::get('/buku/tambah', [dataKhususController::class, 'tambahBuku'])->middleware('auth');
    Route::get('/buku/ubah', [dataKhususController::class, 'ubahBuku'])->middleware('auth');
    Route::get('/penelitian', [dataKhususController::class, 'penelitian'])->middleware('auth');
    Route::get('/penelitian/tambah', [dataKhususController::class, 'tambahPenelitian'])->middleware('auth');
    Route::get('/penelitian/ubah', [dataKhususController::class, 'ubahPenelitian'])->middleware('auth');
    Route::get('/majalah', [dataKhususController::class, 'majalah'])->middleware('auth');
    Route::get('/majalah/tambah', [dataKhususController::class, 'tambahMajalah'])->middleware('auth');
    Route::get('/majalah/ubah', [dataKhususController::class, 'ubahMajalah'])->middleware('auth');
    Route::get('/jurnal', [dataKhususController::class, 'jurnal'])->middleware('auth');
    Route::get('/jurnal/tambah', [dataKhususController::class, 'tambahJurnal'])->middleware('auth');
    Route::get('/jurnal/ubah', [dataKhususController::class, 'ubahJurnal'])->middleware('auth');
    Route::get('/mou', [dataKhususController::class, 'mou'])->middleware('auth');
    Route::get('/mou/tambah', [dataKhususController::class, 'tambahMou'])->middleware('auth');
    Route::get('/mou/ubah', [dataKhususController::class, 'ubahMou'])->middleware('auth');
});

//data-khusus kominfo
Route::prefix('admin/data-khusus')->group(function () {
    Route::get('/perangkat-keras', [dataKhususController::class, 'perangkatKeras'])->middleware('auth');
    Route::get('/perangkat-keras/tambah', [dataKhususController::class, 'tambahPerangkatKeras'])->middleware('auth');
    Route::get('/perangkat-keras/ubah', [dataKhususController::class, 'ubahPerangkatKeras'])->middleware('auth');
    Route::get('/perangkat-lunak', [dataKhususController::class, 'perangkatLunak'])->middleware('auth');
    Route::get('/perangkat-lunak/tambah', [dataKhususController::class, 'tambahPerangkatLunak'])->middleware('auth');
    Route::get('/perangkat-lunak/ubah', [dataKhususController::class, 'ubahPerangkatLunak'])->middleware('auth');
    Route::get('/aplikasi', [dataKhususController::class, 'aplikasi'])->middleware('auth');
    Route::get('/aplikasi/tambah', [dataKhususController::class, 'tambahAplikasi'])->middleware('auth');
    Route::get('/aplikasi/ubah', [dataKhususController::class, 'ubahAplikasi'])->middleware('auth');
});

//data-umum admin utama
Route::prefix('admin/data-umum-admin-utama')->group(function () {
    Route::get('/', [dataUmumAdminUtamaController::class, 'index'])->middleware('auth');
    Route::get('/grafik', [dataUmumAdminUtamaController::class, 'grafik'])->middleware('auth');
    Route::get('/tabel', [dataUmumAdminUtamaController::class, 'tabel'])->middleware('auth');
});

//data-khusus admin utama
Route::prefix('admin/data-khusus-admin-utama')->group(function () {
    Route::get('/', [dataKhususAdminUtamaController::class, 'index'])->middleware('auth');
    Route::get('/grafik', [dataKhususAdminUtamaController::class, 'grafik'])->middleware('auth');
    Route::get('/tabel', [dataKhususAdminUtamaController::class, 'tabel'])->middleware('auth');
});

//data-khusus admin utama
Route::prefix('admin/manajemen-user-opd')->group(function () {
    Route::get('/', [manajemenUserOpdController::class, 'index'])->middleware('auth');
    Route::get('/tambah', [manajemenUserOpdController::class, 'tambahPengguna'])->middleware('auth');
    Route::get('/ubah', [manajemenUserOpdController::class, 'ubahPengguna'])->middleware('auth');
});
