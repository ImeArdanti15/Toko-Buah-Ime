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
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\WishlistController;


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
    return view('welcome');})->name('welcome');

Route::get('/produk', [ShopController::class, 'index'])->name('produk');
Route::post('/produk', [ShopController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ShopController::class, 'product'])->name('produk-detail');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
// Route::post('/cart/create', [CartController::class, 'create'])->name('cart.create');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist/add/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist/products', [WishlistController::class, 'getWishlistedProducts'])->name('wishlist.list');
Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist.store');

// Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

Route::view('/tentangkami', 'tentangkami.index')->name('tentangkami');
Route::view('/daftar', 'daftar.index')->name('daftar');
// Route::view('/dashboard', 'dashboard.index')->name('dashboard');


// Route untuk menampilkan form edit pengguna
// Route::get('user/edit/{id}', [UsersController::class, 'edit'])->name('user.edit');
// Route untuk menyimpan perubahan pada pengguna
// Route::post('user/{id}', [UsersController::class, 'update'])->name('user.update');

// Route untuk tampil produk
Route::get('show_wishlists', [App\Http\Controllers\WishlistController::class, 'showWish'])->name('show_wishlists')->middleware(['auth']);

    Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('auth', [AdminController::class, 'auth'])->name('admin.auth');

    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/store-register', [AdminController::class, 'storeRegister'])->name('admin.storeRegister');
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
    Route::resource('pembelian', BuyController::class);
    });
});

    Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginCustomerController::class, 'login'])->name('account.login');
    Route::post('/login', [LoginCustomerController::class, 'auth'])->name('account.auth');

    Route::get('/register', [LoginCustomerController::class, 'register'])->name('account.register');
    Route::post('/process-register', [LoginCustomerController::class, 'storeRegister'])->name('account.storeRegister');
});

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'wishlist'])->name('wishlist');
        Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
        Route::post('/cart/destroy', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
        Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
        Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');


    Route::get('/logout', [LoginCustomerController::class, 'logout'])->name('account.logout');
    // Route::get('/profile', [LoginCustomerController::class, 'profile'])->name('account.profile');
    });
});
