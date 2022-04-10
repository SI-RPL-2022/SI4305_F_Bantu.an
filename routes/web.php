<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificatorController;

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

Route::middleware(['auth', 'user-access:0'])->group(function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/adddonation', [HomeController::class, 'adddonation'])->name('adddonation');
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
});
