<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/  Auth::routes([
        /*  'register'=>true,
        'verify'=>true, */
    ]);
Route::get('/dashboard',[HomeController::class,'index'])->name('home')->middleware('auth')->middleware('verified');

Route::get('/',[HomeController::class,'index'] );
Route::get('/category/{id}',[CategoriesController::class,'index'] );
Route::get('/product/{id}',[ProductsController::class,'show'] );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
