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

Route::get('/cart',  [CartController::class, 'index'])->name('cart');
Route::get('/order',  [OrderController::class, 'getForm'])->name('ordercake');
Route::get('/detele/{id}',  [CartController::class, 'detele'])->name('detelecake');

Route::resource('cake', CakeController::class);
// Route::get('get-form', 'OrderController@getForm');
// Route::post('handle-form', 'OrderController@handleRequest');

Route::middleware('auth')->group( function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('admin/cake', [CakeAddController::class, 'index'])->name('admin-cake');
});

require __DIR__.'/auth.php';

