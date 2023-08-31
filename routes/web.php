<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminTreeTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;




Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::resource('menu', MenuController::class);
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
    Route::resource('menu', AdminMenuController::class);
    Route::resource('tree_type', AdminTreeTypeController::class);
    Route::resource('blog', AdminBlogController::class);
});
