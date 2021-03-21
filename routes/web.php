<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dataUmumController;
use App\Http\Controllers\dataKhususController;

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
