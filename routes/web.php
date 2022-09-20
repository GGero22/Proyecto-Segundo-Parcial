<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

 Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');


Route::get('/products', [ProductsController::class, 'index'])->name('products.index');


Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

Route::post('/products/create', [ProductsController::class, 'store'])->name('products.store');

Route::resource('products', ProductsController::class);
