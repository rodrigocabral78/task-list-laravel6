<?php

/**
* Module Route User
*/

use Illuminate\Support\Facades\Route;

Route::group([
    // 'namespace' => '\App\Http\Controllers',
    'prefix' => 'v1/users',
    'as'     => 'v1.users.',
    // 'as'     => 'v1.',
], function () {
    // Route::apiResource('users', UserController::class);
    Route::get('', [UserController::class => 'index'])->name('index');
    Route::post('', [UserController::class => 'store'])->name('store');

    # Required Parameters
    Route::get('{user}', [UserController::class => 'show'])->name('show');
    // Route::put('{user}', [UserController::class => 'update'])->name('update');
    // Route::patch('{user}', [UserController::class => 'update'])->name('update');
    Route::match(['put', 'patch'], '{user}', [UserController::class => 'update'])->name('update');
    Route::delete('{user}', [UserController::class => 'destroy'])->name('destroy');
});
