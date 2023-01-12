<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HalamanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HalamanController::class, 'index']);
Route::get('/petunjuk', [HalamanController::class, 'petunjuk']);
Route::get('/informasi', [HalamanController::class, 'informasi']);
Route::get('/pengumuman', [HalamanController::class, 'pengumuman']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/input_data', [AdminController::class, 'input']);
Route::get('/admin/informasi_siswa', [AdminController::class, 'informasi_siswa']);
Route::get('/admin/laporan', [AdminController::class, 'laporan']);