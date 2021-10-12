<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateController;
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
Route::get('/template', [TemplateController::class, 'index'])->name('template');
Route::get('/template/{id}', [TemplateController::class, 'show'])->name('template-detail');
Route::get('/form1', [HomeController::class, 'form1'])->name('form1');
Route::get('/form2', [HomeController::class, 'form2'])->name('form2');
Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('pembayaran');
Route::get('/templateWeb', [HomeController::class, 'web'])->name('web');
Route::get('/templateGambar', [HomeController::class, 'gambar'])->name('gambar');
Route::get('/Login', [HomeController::class, 'Login'])->name('login');
Route::get('/Register', [HomeController::class, 'Register'])->name('register');
Route::get('/Dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');
Route::get('/DashboardUser', [HomeController::class, 'DashboardU'])->name('dashboardu');
Route::get('/PesananUser', [HomeController::class, 'MyOrders'])->name('myorders');

Auth::routes();
