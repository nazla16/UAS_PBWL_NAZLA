<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/barang', [App\Http\Controllers\barangController::class, 'index']);
Route::get('/barang/create', [App\Http\Controllers\barangController::class, 'create']);
Route::post('/barang', [App\Http\Controllers\barangController::class, 'store']);
Route::get('/barang/{id}/edit', [App\Http\Controllers\barangController::class, 'edit']);
Route::patch('/barang/{id}', [App\Http\Controllers\barangController::class, 'update']);
Route::delete('/barang/{id}', [App\Http\Controllers\barangController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pegawai', [App\Http\Controllers\pegawaiController::class, 'index']);
Route::get('/pegawai/create', [App\Http\Controllers\pegawaiController::class, 'create']);
Route::post('/pegawai', [App\Http\Controllers\pegawaiController::class, 'store']);
Route::get('/pegawai/{id}/edit', [App\Http\Controllers\pegawaiController::class, 'edit']);
Route::patch('/pegawai/{id}', [App\Http\Controllers\pegawaiController::class, 'update']);
Route::delete('/pegawai/{id}', [App\Http\Controllers\pegawaiController::class, 'destroy']);

Route::get('/pembeli', [App\Http\Controllers\pembeliController::class, 'index']);
Route::get('/pembeli/create', [App\Http\Controllers\pembeliController::class, 'create']);
Route::post('/pembeli', [App\Http\Controllers\pembeliController::class, 'store']);
Route::get('/pembeli/{id}/edit', [App\Http\Controllers\pembeliController::class, 'edit']);
Route::patch('/pembeli/{id}', [App\Http\Controllers\pembeliController::class, 'update']);
Route::delete('/pembeli/{id}', [App\Http\Controllers\pembeliController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);