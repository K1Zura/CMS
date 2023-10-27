<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GaleriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=> 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

});
Route::middleware(['middleware'=>'auth'])->group(function () {
    Route::get('admin', [AuthController::class, 'index']);
    Route::get('Admin/home', [AuthController::class, 'logout'])->name('admin.home');
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/profil');

    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'create']);
    Route::get('/product-update/{id}', [ProductController::class, 'edit']);
    Route::put('/update/{id}', [ProductController::class, 'update']);
    Route::get('/product-detail/{id}', [ProductController::class, 'detail']);

    Route::get('/grafik', [GrafikController::class, 'index']);
    Route::post('/grafik', [GrafikController::class, 'createChart']);

    Route::get('/galeri', [GaleriController::class, 'index']);

    Route::get('/product-delete/{id}', [ProductController::class, 'delete']);
    Route::delete('/product-destroy/{id}', [ProductController::class, 'destroy']);
});
Route::get('/', [UserController::class, 'index']);