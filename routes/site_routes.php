<?php

use App\Http\Controllers\Site\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::prefix('/news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/show/{news}', [NewsController::class, 'show'])->name('news.show');

});
