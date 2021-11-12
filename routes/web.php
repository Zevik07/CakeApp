<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CakeManagementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('cake', CakeController::class);

Route::get('/cart',  [CartController::class, 'index'])->name('cart');

Route::get('/order',  [OrderController::class, 'getForm'])->name('order');

Route::get('/detele/{id}',  [CartController::class, 'detele'])->name('detelecake');

Route::middleware('auth')->group( function () {
    Route::resource('admin/dashboard', DashboardController::class);
    Route::resource('admin/cake-management', CakeManagementController::class);
});

require __DIR__.'/auth.php';

