<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CakeController as CakeAddController;
use App\Http\Controllers\AddToCart;
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



Route::middleware('auth')->group( function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/cake-add', [CakeAddController::class, 'index'])->name('cake-add');
});

Route::get('/cart',  [CartController::class, 'index'])->name('cart');
Route::get('/order',  [OrderController::class, 'getForm'])->name('ordercake');
Route::get('/detele/{id}',  [CartController::class, 'detele'])->name('detelecake');

Route::get('/cake/addtocart',[AddtoCart::class,'add']);
//Route::get('/cart/order',[order::class,'order']);

Route::resource('cake', CakeController::class);
// Route::get('get-form', 'OrderController@getForm');
// Route::post('handle-form', 'OrderController@handleRequest');


require __DIR__.'/auth.php';

