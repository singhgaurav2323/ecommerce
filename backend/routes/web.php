<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
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

// Authentication setup
Auth::routes();

// Home setup
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Product and Dashboard setup
Route::get('/', [ProductController::class, 'index'])->name('dashboard');
Route::get('/{product}', [ProductController::class, 'show'])->name('product');


// Cart routing
Route::get('/mycart/{id}', [CartController::class, 'show'])->middleware('auth')->name('cartShow');
Route::post('/addToCart', [CartController::class, 'create'])->middleware('auth')->name('cartAdd');
Route::put('/decrease/{cartid}', [CartController::class, 'decrease'])->middleware('auth')->name('decreaseQuantity');
Route::put('/increase/{cartid}', [CartController::class, 'increase'])->middleware('auth')->name('increaseQuantity');
Route::delete('/destroy/{id}/{product}', [CartController::class, 'destroy'])->middleware('auth')->name('removeCart');

// Payments routes
Route::get('/checkout/{userid}', [PaymentController::class, 'show'])->middleware('auth')->name('checkout');
Route::get('/checkout/buy/{productid}', [PaymentController::class, 'index'])->middleware('auth')->name('buyNow');
Route::post('/checkout/payment/{userid}', [PaymentController::class, 'create'])->middleware('auth')->name('createPayment');
