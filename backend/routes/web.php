<?php

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

// product and dashboard setup
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/{product}', function ($product) {
    return view('product', ["product" => $product]);
})->name('product');

// authentication setup
Auth::routes();

// home setup
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
