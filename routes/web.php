<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::resource('/', DashboardController::class);
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('brand', BrandController::class);
Route::resource('attribute', AttributeController::class);
Route::resource('user', UserController::class);

Route::get('login', function () { })->name('login');
Route::get('register', function () { })->name('register');
