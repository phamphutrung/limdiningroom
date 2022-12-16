<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'app');

Route::middleware([])->group(function () {
    Route::post('/admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('foods')->group(function () {
        Route::get('', [FoodController::class, 'list'])->name('food.list');
        Route::post('', [FoodController::class, 'create'])->name('food.create');
    });
});

//upload image
Route::post('/upload', [MediaController::class, 'store'])->name('upload');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
