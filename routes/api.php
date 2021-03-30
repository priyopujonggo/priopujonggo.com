<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlamatController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [AuthController::class, 'index']);
Route::post('/users', [AuthController::class, 'store']);
Route::get('/users/{id}', [AuthController::class, 'show']);
Route::get('/about', [AlamatController::class, 'index']);
Route::get('/map', [AlamatController::class, 'index']);



