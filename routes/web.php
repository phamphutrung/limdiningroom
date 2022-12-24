<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GalleryController;
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

// Route::view('/', 'index');

Route::post('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([])->group(function () {
    Route::prefix('foods')->group(function () {
        Route::get('/', [FoodController::class, 'list'])->name('food.list');
        Route::post('/', [FoodController::class, 'create'])->name('food.create');
        Route::post('/update', [FoodController::class, 'update'])->name('food.update');
        Route::get('/show', [FoodController::class, 'show'])->name('food.show');
        Route::delete('/', [FoodController::class, 'delete'])->name('food.delete');
    });

    Route::prefix('/galleries')->group(function () {
        Route::post('/', [GalleryController::class, 'create'])->name('gallery.create');
        Route::get('/', [GalleryController::class, 'list'])->name('gallery.list');
        Route::get('/show', [GalleryController::class, 'show'])->name('gallery.show');
        Route::post('/update', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/', [GalleryController::class, 'delete'])->name('gallery.delete');
    });

    Route::prefix('/events')->group(function () {
        Route::post('/', [EventController::class, 'create'])->name('event.create');
        Route::get('/', [EventController::class, 'list'])->name('event.list');
        Route::get('/show', [EventController::class, 'show'])->name('event.show');
        Route::post('/update', [EventController::class, 'update'])->name('event.update');
        Route::delete('/', [EventController::class, 'delete'])->name('event.delete');
    });
});

//upload image
Route::post('/upload', [MediaController::class, 'store'])->name('upload');

Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');
