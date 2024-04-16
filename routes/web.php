<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('home');
});


Route::get('/registro',[RegistroController::class,'create'])->name('registro.index');
Route::post('/registro',[RegistroController::class,'store'])->name('registro.store');
Route::get('/login',[SesionController::class,'create'])->name('login.index');
Route::post('/login',[SesionController::class,'store'])->name('login.store');
Route::get('/logout',[SesionController::class,'destroy'])->name('login.destroy');
Route::get('/products',[ProductsController::class,'create'])->name('products.index');
Route::get('/products/nuevo',[ProductsController::class,'nuevo'])->name('products.nuevo');
Route::post('/products/nuevo',[ProductsController::class,'store'])->name('products.store');

Route::resource('products', ProductsController::class, ['except' => ['index', 'store']]);
