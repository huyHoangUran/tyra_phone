<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('/archive', [ProductController::class, 'archive'])->name('admin.product.archive');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->withTrashed()->name('admin.product.destroy');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/archive', [CategoryController::class, 'archive'])->name('admin.category.archive');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->withTrashed()->name('admin.category.destroy');
    });
    Route::prefix('banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('admin.banner');
        Route::get('/create', [BannerController::class, 'create'])->name('admin.banner.create');
        Route::post('/store', [BannerController::class, 'store'])->name('admin.banner.store');
        Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
        Route::put('/update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::get('/archive', [BannerController::class, 'archive'])->name('admin.banner.archive');
        Route::delete('/destroy/{id}', [BannerController::class, 'destroy'])->withTrashed()->name('admin.banner.destroy');
    });
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail_product', [HomeController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';