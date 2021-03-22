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
    Route::get('/admin/logout', [loginController::class, 'logout']);
    Route::get('/admin/dashboard', [dataUmumController::class, 'index'])->name('home'); //middelware
});

//data-umum
Route::prefix('admin/data-umum')->group(function () {
    Route::get('/pegawai', [dataUmumController::class, 'pegawai']);
    Route::get('/kantor', [dataUmumController::class, 'kantor']);
    Route::get('/webaplikasi', [dataUmumController::class, 'webaplikasi']);
});

//data-khusus
Route::prefix('admin/data-khusus')->group(function () {
    Route::get('/buku', [dataKhususController::class, 'buku']);
    Route::get('/penelitian', [dataKhususController::class, 'penelitian']);
    Route::get('/majalah', [dataKhususController::class, 'majalah']);
    Route::get('/jurnal', [dataKhususController::class, 'jurnal']);
    Route::get('/mou', [dataKhususController::class, 'mou']);
});

//data-umum admin utama
Route::prefix('admin/data-umum-admin-utama')->group(function () {
    Route::get('/', [dataUmumAdminUtamaController::class, 'index']);
    Route::get('/grafik', [dataUmumAdminUtamaController::class, 'grafik']);
    Route::get('/tabel', [dataUmumAdminUtamaController::class, 'tabel']);
});

//data-khusus admin utama
Route::prefix('admin/data-khusus-admin-utama')->group(function () {
    Route::get('/', [dataKhususAdminUtamaController::class, 'index']);
    Route::get('/grafik', [dataKhususAdminUtamaController::class, 'grafik']);
    Route::get('/tabel', [dataKhususAdminUtamaController::class, 'tabel']);
});

//data-khusus admin utama
Route::prefix('admin/manajemen-user-opd')->group(function () {
    Route::get('/', [manajemenUserOpdController::class, 'index']);
});
