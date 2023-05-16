<?php

use App\Http\Controllers\BayarController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
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
// index
Auth::routes();
Route::get('/', [BerandaController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// menu
Route::get('/menu', [MenuController::class, 'index']);
// pesan
Route::get('/pesan', [PesanController::class, 'TampilReservasi']);
Route::post('/pesan/sukses', [PesanController::class, 'Reservasi']);
// profil & pesanan
Route::get('/profil', [ProfilController::class, 'index']);
Route::post('/bayar/{no_pes}', [BayarController::class, 'index']);
Route::get('batal/{no_pes}', [ProfilController::class, 'batal']);

// admin 
Route::get('/meja', [MejaController::class, 'index']);
Route::post('/tambah-meja', [MejaController::class, 'create']);
Route::post('/tambah-meja/sukses', [MejaController::class, 'store']);
Route::get('/data-pesanan', [PesananController::class, 'index']);
Route::get('/print-pesanan', [PesananController::class, 'pdf']);
Route::get('/laporan', [PesananController::class, 'laporan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
