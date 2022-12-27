<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ProductController;

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

Route::get('/', [App\Http\Controllers\Halaman_landing_page\LandingPageController::class, 'index'])->name('home');

//SISTEM LOGIN
Route::get('auth/register', [App\Http\Controllers\Peserta\SistemLoginPesertaController::class, 'register_akun'])->name('register.akun');
Route::post('/proses_register', [App\Http\Controllers\Peserta\SistemLoginPesertaController::class, 'proses_register'])->name('proses.register');
Route::get('auth/login', [App\Http\Controllers\Peserta\SistemLoginPesertaController::class, 'halaman_login'])->name('login.peserta');
Route::post('/verifikasilogin', [App\Http\Controllers\Peserta\SistemLoginPesertaController::class, 'loginVerifikasi'])->name('verifikasi.login');
Route::get('auth/logout', [App\Http\Controllers\Peserta\SistemLoginPesertaController::class, 'log_out'])->name('logout.peserta');


Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);

    Route::resource('products', ProductController::class);

});