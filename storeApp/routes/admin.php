<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/categories',[CategoriesController::class,'index'])->name('Categories');
Route::get('/categories/{id}/childs',[CategoriesController::class,'index'])->name('categories.child');
Route::get('/categories/create',[CategoriesController::class,'create'])->name('categories.create');
Route::post('/categories',[CategoriesController::class,'store'])->name('categories.store');
Route::get('/categories/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::put('/categories/{id}',[CategoriesController::class,'update'])->name('categories.update');
Route::delete('/categories/{id}',[CategoriesController::class,'delete'])->name('categories.delete');

route::get('/products',[ProductsController::class,'index'])->name('products');
route::get('/products/create',[productsController::class,'create'])->name('products.create');
route::post('/products',[productsController::class,'store'])->name('products.store');
route::get('/products/{id}',[productsController::class,'edit'])->name('products.edit');
route::put('/products/{id}',[productsController::class,'update'])->name('products.update');
route::delete('/products/{id}',[productsController::class,'delete'])->name('products.delete');

