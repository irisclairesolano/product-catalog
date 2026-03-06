<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminUserController;

Route::get('/catalog/{category?}/{id?}', [ProductController::class, 'show']);
Route::get('/', [HomeController::class, 'index']);
Route::prefix('dashboard')->group(function () {
    Route::resource('admin/users', AdminUserController::class);
});