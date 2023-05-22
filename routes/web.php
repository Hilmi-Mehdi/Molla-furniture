<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('clients', ClientController::class);
Route::resource('orders', OrderController::class);

Route::get('/index', function () {
    return view('main.index', [MainController::class, 'index']);
})->name('index');

Route::get('/shop', [MainController::class, 'shop'])->name('shop');

