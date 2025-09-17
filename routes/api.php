<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(StudentController::class)->group(function(){
    Route::get('/students','getStudent');
    Route::post('/add-student','addStudent');
    Route::post('/edit-student/{id}','editStudent'); //route has param
    Route::delete('/delete-student/{id}','deleteStudent');
    Route::get('/student/search={search}','searchStudent');
});
