<?php

use App\Http\Controllers\ProductController;
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
*/
// single route with controller
// Route::get('/',[ProductController::class,'getAllProduct']);
// Route::post('/add-product',[ProductController::class,'addProduct']);
// Route::post('/add-product',[ProductController::class,'addProduct']);
// Route::post('/add-product',[ProductController::class,'addProduct']);
// Route::post('/add-product',[ProductController::class,'addProduct']);
// Route::post('/add-product',[ProductController::class,'addProduct']);
// route group with controller
Route::controller(ProductController::class)->group(function(){
    Route::get('/','getAllProduct');
    Route::post('/add-product','addProduct')->name('submit');
   
});
