<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    CategoryController,
    ProductController,
    UserController,
    IndexController
};

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/encontrar', [IndexController::class, 'search'])->name('index.search');

Route::get('/categorias', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categorias/novo', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
Route::post('/categoria', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
Route::get('categoria/{id}', [CategoryController::class, 'show'])->name('categories.show')->middleware('auth');
Route::get('categoria/{id}/produtos', [CategoryController::class, 'showproducts'])->name('categories.showproducts');
Route::get('/categoria/{id}/editar', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::put('/categoria/{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::get('/categoria/{id}/apagar', [CategoryController::class, 'confirmDelete'])->name('categories.confirmDelete')->middleware('auth');
Route::delete('/categoria/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');


Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('/produto', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/produto/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produto/{id}/editar', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/produto/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/produto/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');


Route::get('/usuarios', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('/usuarios/novo', [UserController::class, 'create'])->name('users.create');
Route::post('/usuario', [UserController::class, 'store'])->name('users.store');
Route::get('/usuario/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/usuario/{id}/editar', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');
Route::put('/usuario/{id}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('/usuario/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');