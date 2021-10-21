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
        Route::resource('produk-web', '\App\Http\Controllers\Admin\ProductWebController');
        Route::resource('produk-gambar', '\App\Http\Controllers\Admin\ProductImageController');
        Route::resource('produk-video', '\App\Http\Controllers\Admin\ProductVideoController');
        Route::resource('order', '\App\Http\Controllers\Admin\OrderController');
    });

Route::prefix('customer')
    ->namespace('customer')
    ->middleware(['auth', 'user'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\User\DashboardController::class, 'index'])
            ->name('dashboard-user');
        Route::resource('pesanan-ku', '\App\Http\Controllers\User\MyOrderController');
    });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/template', [TemplateController::class, 'index'])->name('template');
Route::get('/template/{slug}', [TemplateController::class, 'show'])->name('template-detail');

Route::get('/form_daftar/{id}/create', [App\Http\Controllers\OrderController::class, 'formDaftar']);

Route::post('/form_daftar/{id_kode}/create/store', [App\Http\Controllers\OrderController::class, 'daftar']);

Route::get('/order/{id_kode}', [App\Http\Controllers\OrderController::class, 'order'])->name('order')->middleware(['auth']);;
Route::post('/order/store/{id_kode}', [App\Http\Controllers\OrderController::class, 'orderStore'])->middleware(['auth']);;


Route::get('/form2', [HomeController::class, 'form2'])->name('form2');
Route::get('/formTemplate', [HomeController::class, 'formTemplate'])->name('formTemplate');
Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('pembayaran');
Route::get('/templateWeb', [HomeController::class, 'web'])->name('web');
Route::get('/templateGambar', [HomeController::class, 'gambar'])->name('gambar');
Route::get('/Login', [HomeController::class, 'Login'])->name('login');
Route::get('/Register', [HomeController::class, 'Register'])->name('register');
Route::get('/DashboardUser', [HomeController::class, 'DashboardU'])->name('dashboardu');
Route::get('/PesananUser', [HomeController::class, 'MyOrders'])->name('myorders');
Route::get('/ProdukPaket', [HomeController::class, 'Paket'])->name('paket');
Route::get('/ProdukSingle', [HomeController::class, 'Single'])->name('single');
Route::get('/Team', [HomeController::class, 'Team'])->name('team');

Auth::routes();
