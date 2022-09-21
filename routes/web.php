<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;


use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ControladosController;


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





Route::get('/controlados', [ControladosController::class, 'index']) ->name('controlados.index');


Route::get('/controlados/create', [ControladosController::class, 'create']) ->name('controlados.create');

Route::post('/controlados/create', [ControladosController::class, 'store']) ->name('controlados.store');

Route::resource('controlados', ControladosController::class);


Route::get('/superadmin', [SuperAdminController::class, 'index'])->middleware('auth.superadmin')->name('superadmin.index');



Route::get('/usuario', [UserController::class, 'index'])->middleware('auth.usuario')->name('usuario.index');
