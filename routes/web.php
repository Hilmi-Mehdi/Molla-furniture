<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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

Route::get('/index',[MainController::class, 'index'])->name('index');

Route::get('/shop', [MainController::class, 'shop'])->name('shop');

Route::get('/category/{id}', [MainController::class, 'category'])->name('category');

Route::get('/ss', function () {
    return view('main.product');
});

Route::get('/product/{id}', [MainController::class, 'show'])->name('product');