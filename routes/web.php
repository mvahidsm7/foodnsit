<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\Testing;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
// menu
Route::get('/menu', [MenuController::class, 'index']);
// pesan
Route::get('/set-pesan', [PesanController::class, 'setReservasi']);
Route::get('/pesan', [PesanController::class, 'TampilReservasi']);
Route::post('/pesan/sukses', [PesanController::class, 'Reservasi']);
Route::get('/sukses', [PesanController::class, 'Sukses']);
// profil & pesanan
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/detail/{kd_pes}', [ProfilController::class, 'detail']);
Route::get('/bayar/{kd_pes}', [BayarController::class, 'index']);
Route::get('/bayar/{kd_pes}/sukses', [BayarController::class, 'sukses']);
Route::get('batal/{kd_pes}', [ProfilController::class, 'batal']);
Route::post('batal/{kd_pes}/sukses', [ProfilController::class, 'BatalSukses']);
// Route::post('/midtrans-callback', [BayarController::class, 'callback']);

// admin - meja
Route::get('/admin/meja', [AdminController::class, 'TampilMeja']);
Route::post('/tambah-meja', [AdminController::class, 'TambahMejaView']);
Route::post('/tambah-meja/sukses', [AdminController::class, 'TambahMeja']);
// admin - pesanan
Route::get('/data-pesanan', [AdminController::class, 'TampilPesanan']);
Route::get('/print-pesanan', [AdminController::class, 'pdf']);
Route::get('/laporan', [PesananController::class, 'laporan']);
// admin - menu
Route::get('/admin/menu', [AdminController::class, 'TampilMenu']);
Route::post('/tambah-menu', [AdminController::class, 'TambahMenuView']);
Route::post('/tambah-menu/sukses', [AdminController::class, 'TambahMenu']);
Route::post('/edit-menu/{id_menu}', [AdminController::class, 'editMenu']);
Route::post('/update-menu/sukses', [AdminController::class, 'UpdateMenu']);
// test
Route::get('/test', [Testing::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index']);
