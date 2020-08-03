<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/**
 * Endpoint Get All User Information Has Register
 *
 * this is Free Access to See User
 */
Route::prefix('auth')
    ->name('auth.')
    ->group(function(){
        Route::get('all' , [UserController::class , 'index'])->name('all');
    });
