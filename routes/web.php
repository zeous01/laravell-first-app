<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthManager::class , 'login'])-> name('login');
Route::post('/login', [AuthManager::class , 'loginPost'])-> name('login.post');

Route::get('/registeration', [AuthManager::class , 'registeration'])-> name('registeration');
Route::post('/registeration', [AuthManager::class , 'registerationPost'])-> name('registeration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/product', [ProductController::class , 'index'])->name('products.index');

Route::get('/product/create', [ProductController::class , 'create'])->name('product.create');
Route::post('/product', [ProductController::class , 'store'])->name('product.store');

Route::get('/product/{product}/edit', [ProductController::class , 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class , 'update'])->name('product.update');

Route::delete('/product/{product}/destroy', [ProductController::class , 'destroy'])->name('product.destroy');