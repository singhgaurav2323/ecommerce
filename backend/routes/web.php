<?php

use App\Http\Controllers\CartController;
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
// authentication setup
Auth::routes();

// home setup
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// product and dashboard setup
Route::get('/', [ProductController::class, 'index'])->name('dashboard');
Route::get('/{product}', [ProductController::class, 'show'])->name('product');


// cart routing
Route::post('/addToCart', [CartController::class, 'create'])->middleware('auth')->name('cartAdd');
