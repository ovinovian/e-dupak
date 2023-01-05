<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PermController;
use App\Http\Controllers\Peserta\ProfilController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\PrakomController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [App\Http\Controllers\Halaman_landing_page\LandingPageController::class, 'index']);
// Route::get('/finish', [App\Http\Controllers\Halaman_landing_page\LandingPageController::class, 'index']);
Route::get('/finish', [App\Http\Controllers\Halaman_landing_page\LandingPageController::class, 'index'])->name('finish');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Peserta
    // Route::get('peserta/profil', [ProfilController::class, 'index'])->name('profil.peserta');
    Route::resource('profil', ProfilController::class);
    Route::get('getTkJab', [ProfilController::class, 'getTkJab'])->name('getTkJab');
    Route::get('peserta/edit_profil/{id}', [ProfilController::class, 'edit_profil'])->name('peserta.edit.profil');
    Route::post('peserta/ubah_profil/{id}', [ProfilController::class, 'ubah_profil'])->name('peserta.ubah.profil');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('jadwals', JadwalController::class);
    Route::get('/publishJadwal/{id}', [JadwalController::class, 'publishJadwal'])->name('publishJadwal');
    Route::resource('perms', PermController::class);
    Route::resource('daftars', DaftarController::class);
    Route::get('/daftar/{id}', [DaftarController::class, 'daftar'])->name('daftar');
    Route::get('/ajuDupak/{id}', [DaftarController::class, 'ajuDupak'])->name('ajuDupak');
    Route::get('getUnsur', [DaftarController::class, 'getUnsur'])->name('getUnsur');
    Route::get('getSubUnsur', [DaftarController::class, 'getSubUnsur'])->name('getSubUnsur');
    Route::get('getButir', [DaftarController::class, 'getButir'])->name('getButir');
    Route::resource('tims', TimController::class);
    Route::resource('prakoms', PrakomController::class);
    Route::get('/angkat/{id}', [PrakomController::class, 'angkat'])->name('angkat');
    Route::get('/setuju/{id}', [PrakomController::class, 'setuju'])->name('setuju');
    Route::get('/nonaktif/{id}', [PrakomController::class, 'nonaktif'])->name('nonaktif');
});