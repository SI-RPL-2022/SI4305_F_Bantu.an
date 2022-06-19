<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificatorController;
use App\Http\Controllers\DaftarController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::post('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

Route::middleware(['auth', 'user-access:0'])->group(function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/adddonation', [HomeController::class, 'adddonation'])->name('adddonation');
    Route::post('/postdonation', [HomeController::class, 'postdonation'])->name('postdonation');
    Route::get('/donasiku', [HomeController::class, 'donasiku'])->name('donasiku');
    Route::get('/pengajuanku', [HomeController::class, 'pengajuanku'])->name('pengajuanku');
    Route::get('/katalog', [HomeController::class, 'katalog'])->name('katalog');
    Route::get('/detailproduk/{id}', [HomeController::class, 'detailProduk'])->name('detailproduk');
    Route::get('/tambahpengajuan/{id}', [HomeController::class, 'tambahpengajuan'])->name('tambahpengajuan');
    Route::post('/postpengajuan', [HomeController::class, 'postpengajuan'])->name('postpengajuan');
    Route::get('/sumbangan', [HomeController::class, 'sumbangan'])->name('sumbangan');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:1'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:2'])->group(function () {
    Route::get('/verificator/home', [VerificatorController::class, 'index'])->name('verificator.home');
    Route::get('/verificator/profile', [VerificatorController::class, 'profile'])->name('verificator.profile');
    Route::get('/verificator/verifyonline', [VerificatorController::class, 'verifyonline'])->name('verificator.verifyonline');
    Route::get('/verificator/verifyonsite', [VerificatorController::class, 'verifyonsite'])->name('verificator.verifyonsite');
    Route::get('/verificator/showverif/{id}', [VerificatorController::class, 'showverif'])->name('verificator.showverif');
    Route::get('/verificator/showverifonsite/{id}', [VerificatorController::class, 'showverifonsite'])->name('verificator.showverifonsite');
    Route::post('/verificator/verifikasi', [VerificatorController::class, 'verifikasi'])->name('verificator.verifikasi');
    Route::post('/verificator/prosesverifikasionsite', [VerificatorController::class, 'verifikasi'])->name('verificator.prosesverifikasionsite');
    Route::post('/verificator/prosesverifikasipembelian', [VerificatorController::class, 'prosesverifikasipembelian'])->name('verificator.prosesverifikasipembelian');
    Route::get('/verificator/verifikasipembelian', [VerificatorController::class, 'verifikasipembelian'])->name('verificator.verifikasipembelian');
    Route::get('/verificator/showverifpembelian/{id}', [VerificatorController::class, 'showverifpembelian'])->name('verificator.showverifpembelian');
});
