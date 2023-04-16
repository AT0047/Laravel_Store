<?php

use App\Http\Controllers\CatigoryrController;
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
});

Route::prefix('catigories')->as('catigories.')->group(function (){
    Route::get('/',[CatigoryrController::class,'index'])->name('index');
});

Route::prefix('products')->as('products.')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('index');
});