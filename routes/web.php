<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\StockStatusController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/quotations', function () {
    return view('quotations');
})->name('quotations');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// ── Admin Auth (guest only) ──────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ── Admin Protected Routes ───────────────────────────────
Route::prefix('admin')->name('admin.')->middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
    Route::resource('products',      AdminProductController::class);
    Route::resource('categories',    CategoryController::class)->except(['show']);
    Route::resource('units',         UnitController::class)->except(['show']);
    Route::resource('stock-statuses', StockStatusController::class)->except(['show']);
    Route::resource('gallery',       AdminGalleryController::class);
});
