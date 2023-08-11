<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts/home');
});

Route::get('/blog_single', [App\Http\Controllers\HomeController::class, 'blog_single'])->name('blog_single');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');

Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::get('/product_detail', [App\Http\Controllers\HomeController::class, 'product_detail'])->name('product_detail');

Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::get('/register', 'App\Http\Controllers\AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\AuthController@register');

Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/product', [ProductController::class, 'showProductPage'])->name('products');

Route::get('/product-page', [ProductPageController::class, 'showProductPage'])->name('product.page');
