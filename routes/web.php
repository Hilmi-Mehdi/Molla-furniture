<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    echo('Dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::resource('products', ProductController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('clients', ClientController::class);

    Route::resource('orders', OrderController::class);

});

Route::get('/index',[MainController::class, 'index'])->name('index');

Route::get('/shop', [MainController::class, 'shop'])->name('shop');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/faq', [MainController::class, 'faq'])->name('faq');

Route::get('/categories/{id}', [MainController::class, 'category'])->name('categories');

Route::get('/product/{id}', [MainController::class, 'show'])->name('product');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});