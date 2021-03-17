<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminOPDController;
use App\Http\Controllers\adminOPDDataKhususController;

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

Route::get('/', [loginController::class, 'index'])->name('login');

Route::post('/admin/login', [loginController::class, 'auth']);
Route::get('/admin/logout', [loginController::class, 'logout']);
Route::get('/admin/dashboard', [adminOPDController::class, 'index'])->name('home'); //middelware

Route::prefix('admin/data-umum')->group(function () {
    Route::get('/pegawai', [adminOPDController::class, 'pegawai']);
    Route::get('/kantor', [adminOPDController::class, 'kantor']);
    Route::get('/webaplikasi', [adminOPDController::class, 'webaplikasi']);
});

Route::prefix('admin/data-khusus')->group(function () {
});
