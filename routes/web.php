<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('users')->as('users.')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::delete('delete/{id}', [UserController::class,'delete'])->name('delete');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [UserController::class, 'update'])->name('update');
});



Route::prefix('categories')->as('categories.')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::delete('delete/{id}', [CategoryController::class,'delete'])->name('delete');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');

});



Route::prefix('products')->as('products.')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('index');
});