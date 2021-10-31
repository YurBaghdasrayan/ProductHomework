<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

use App\Http\Controllers\UsersController;

use App\Http\Controllers\ProductController;
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

//MainController GET methods

Route::get('/online-market.com', [MainController::class, 'getHome']);

Route::get('/login', [MainController::class, 'getLogin'])->name('login');

Route::get('/signup', [MainController::class, 'getSignup']);

// Only Users

Route::group(['middleware' => ['loggedIn']], function () {

    Route::get('/profile', [MainController::class, 'getProfile'])->name('profile');

    Route::get('/product', [MainController::class, 'getProduct']);

    Route::get('/users-list', [MainController::class, 'getUserlist']);

    Route::get('/product-list', [MainController::class, 'getProdlist'])->name('product-list');

});

//UserController POST methods

Route::post('/login', [UsersController::class, 'postLogin']);

Route::post('/signup', [UsersController::class, 'postSignup']);

//ProductController POST methods

Route::post('/product', [ProductController::class, 'postProduct']);




