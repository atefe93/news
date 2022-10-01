<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
    });
});
