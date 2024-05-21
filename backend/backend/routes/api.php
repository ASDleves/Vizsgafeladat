<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemakController;
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
Route::get('/szavak',[SzavakController::class,'index']);
Route::get('/szavak/tema/{id}',[SzavakController::class,'szavaktemakkal']);
Route::get('/tema',[TemakController::class,'index']);
