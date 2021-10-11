<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')
    ->namespace('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('produk', '\App\Http\Controllers\Admin\ProductController');
    });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/template', [HomeController::class, 'template'])->name('template');
Route::get('/form1', [HomeController::class, 'form1'])->name('form1');
Route::get('/form2', [HomeController::class, 'form2'])->name('form2');
Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('pembayaran');
Route::get('/templateWeb', [HomeController::class, 'web'])->name('web');
Route::get('/templateGambar', [HomeController::class, 'gambar'])->name('gambar');
Route::get('/Login', [HomeController::class, 'Login'])->name('login');
Route::get('/Register', [HomeController::class, 'Register'])->name('register');
Route::get('/Dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');

Auth::routes();
