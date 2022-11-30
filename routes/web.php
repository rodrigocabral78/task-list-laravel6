<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes([]);

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', HomeController::class . '@index')->name('home');
// Route::get('/home', function () {
//     return view('home');
// })->name('home');

$basePath = base_path('routes/web/');
if (is_dir($basePath)) {
    $files = File::allFiles($basePath);
    foreach ($files as $file) {
        Route::group([], $basePath . $file->getFilename());
    }
}
