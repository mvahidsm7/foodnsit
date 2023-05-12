<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesanController;
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
Route::get('/', function () {
    return view('index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// menu
Route::get('/menu', [MenuController::class, 'menu']);
// pesan
Route::get('/pesan', [PesanController::class, 'TampilReservasi']);
Route::post('/pesan/sukses', [PesanController::class, 'Reservasi']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
