<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Testing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\PesanController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TentangController;

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
Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
// menu
Route::get('/menu', [MenuController::class, 'index']);
// pesan
Route::get('/set-pesan', [PesanController::class, 'setReservasi']);
Route::get('/pesan', [PesanController::class, 'TampilReservasi']);
Route::post('/pesan/sukses', [PesanController::class, 'Reservasi']);
Route::get('/sukses', [PesanController::class, 'Sukses']);
Route::post('/selesai/{kd_pes}', [PesanController::class, 'selesai']);
// profil & pesanan
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/detail/{kd_pes}', [ProfilController::class, 'detail']);
Route::get('/invoice/{kd_pes}', [ProfilController::class, 'invoice']);
Route::get('/bayar/{kd_pes}', [BayarController::class, 'index']);
Route::get('/bayar/{kd_pes}/sukses', [BayarController::class, 'create']);
Route::get('email', [emailController::class, 'email'])->name('email');
Route::get('batal/{kd_pes}', [ProfilController::class, 'batal']);
Route::get('batal/{kd_pes}/sukses', [ProfilController::class, 'BatalSukses']);
Route::post('/expired/{kd_pes}', [PesanController::class, 'expired']);
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
Route::get('/tambah-menu', [AdminController::class, 'TambahMenuView']);
Route::post('/tambah-menu/sukses', [AdminController::class, 'TambahMenu']);
Route::post('/edit-menu/{id_menu}', [AdminController::class, 'editMenu']);
Route::post('/update-menu/sukses', [AdminController::class, 'UpdateMenu']);
Route::get('/hapus-menu/{id_menu}', [AdminController::class, 'hapus']);
// admin - user
Route::get('/admin/user', [AdminController::class, 'TampilUser']);
// test
Route::get('/test', [Testing::class, 'index']);
Route::get('/template', function(){return view('templating');});
Route::post('/test/form', [Testing::class, 'form']);
// grafik
// Route::get('/', [BerandaController::class, 'grafik']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index']);

// forgot - password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// change - password
Route::get('/change-password', [ProfilController::class, 'changePassword']);
Route::post('/change-password', [ProfilController::class, 'processChangePassword']);