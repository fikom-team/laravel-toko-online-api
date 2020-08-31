<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\Products\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Endpoint Get All User Information Has Register
 *
 * this is Free Access to See User
 */

Route::prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::middleware('guest')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::post('/register', [UserController::class, 'store'])->name('user.store');
            Route::post('/login',    [LoginController::class, 'login'])->name('user.login');
            Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
        });
        Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update')->middleware('auth:sanctum');
    });

Route::prefix('products')
    ->name('products')
    ->group(function() {
        Route::get('/' , [ProductController::class , 'index'])->name('products');
        Route::get('/create' , [ProductController::class , 'store'])->name('product.store');
        Route::get('/{id}' , [ProductController::class , 'show'])->name('product.show');
    });
