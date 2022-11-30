<?php

/**
* Module Route User
*/

use Illuminate\Support\Facades\Route;

// Route::resource('users', UserController::class);
Route::group([
    // 'namespace' => '\App\Http\Controllers',
    'prefix' => 'users',
    'as'     => 'users.',
], function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::post('', [UserController::class, 'store'])->name('store');

    # Required Parameters
    Route::get('{user}', [UserController::class, 'show'])->name('show');
    Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
    // Route::put('{user}', [UserController::class , 'update'])->name('update');
    // Route::patch('{user}', [UserController::class , 'update'])->name('update');
    Route::match(['put', 'patch'], '{user}', [UserController::class, 'update'])->name('update');
    Route::delete('{user}', [UserController::class, 'destroy'])->name('destroy');
});
