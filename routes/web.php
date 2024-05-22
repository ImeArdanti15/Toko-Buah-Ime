<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductReviewsController;
use App\Http\Controllers\DiscountsController;
use App\Http\Controllers\DiscountCategoriesController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});






Route::view('/tentangkami', 'tentangkami.index')->name('tentangkami');
Route::view('/produk', 'produk.index')->name('produk');
Route::view('/wishlist', 'wishlist.index')->name('wishlist');
// Route::view('/masuk', 'masuk.index')->name('masuk');
Route::view('/daftar', 'daftar.index')->name('daftar');
// Route::view('/dashboard', 'dashboard.index')->name('dashboard');
Route::view('/buah', 'produk.buah.index')->name('buah');
Route::view('/sayur', 'produk.sayur.index')->name('sayur');
Route::view('/rempah', 'produk.rempah.index')->name('rempah');


// Route::view('/detailpesanan', 'dashboard.detailpesanan.index')->name('detailpesanan');
// Route::view('/diskon', 'dashboard.diskon.index')->name('diskon');
// Route::view('/kategoridiskon', 'dashboard.kategoridiskon.index')->name('kategoridiskon');
// Route::view('/kategoriproduk', 'dashboard.kategoriproduk.index')->name('kategoriproduk');
// Route::view('/pembayaran', 'dashboard.pembayaran.index')->name('pembayaran');
// Route::view('/penilaianproduk', 'dashboard.penilaianproduk.index')->name('penilaianproduk');
// Route::view('/barang', 'dashboard.barang.index')->name('barang');
// Route::view('/pengiriman', 'dashboard.pengiriman.index')->name('pengiriman');



// Route untuk menampilkan form edit pengguna
Route::get('user/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
// Route untuk menyimpan perubahan pada pengguna
Route::post('user/{id}', [UsersController::class, 'update'])->name('user.update');



Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminController::class, 'login'])->name('admin.login');
        Route::post('auth', [AdminController::class, 'auth'])->name('admin.auth');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::resource('user', UsersController::class);
        Route::resource('barang', ProductsController::class);
        Route::resource('pesanan', OrdersController::class);
        Route::resource('pengiriman', DeliveriesController::class);
        Route::resource('pembayaran', PaymentsController::class);
        Route::resource('kategoriproduk', ProductCategoriesController::class);
        Route::resource('penilaianproduk', ProductReviewsController::class);
        Route::resource('diskon', DiscountsController::class);
        Route::resource('detailpesanan', OrderDetailsController::class);
        Route::resource('kategoridiskon', DiscountCategoriesController::class);
        Route::resource('pelanggan', CustomersController::class);
        Route::resource('wishlist', WishlistController::class);
    });

});
