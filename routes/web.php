<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginGoogleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\website\ProductController;
use App\Http\Controllers\website\BlogController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\website\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('dang-nhap', [LoginGoogleController::class, 'Login'])->name('login.index');
Route::post('dang-nhap', [LoginGoogleController::class, 'PostLogin']);
Route::get('dang-ky', [RegisterController::class, 'Register'])->name('register.index');
Route::get('quen-mat-khau', [ResetPasswordController::class, 'Password'])->name('resetpassword.index');

Route::get('san-pham', [ProductController::class, 'index'])->name('product.index');
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('gio-hang', [CartController::class, 'index'])->name('cart.index');