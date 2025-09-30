<?php

use App\Http\Controllers\UserController;
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
// public route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/home', function () {
    return view('Frontend.index');
});
//user route
Route::controller(UserController::class)->group(function(){
    Route::get('/auth/login','showFormLogin')->name('login');
    Route::post('/auth/login','login')->name('login');
    Route::get('/auth/register','showFormRegister')->name('register');
    Route::post('/auth/register','reigster')->name('register');
    Route::get('/auth/logout','logout');
});
// route with middleware
Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard',[UserController::class,'dashboard']);
});
