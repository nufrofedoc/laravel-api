<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Htpp\Controllers\AuthController;
use App\Http\Controllers\City\CityController;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::get('city', [CityController::class, 'city']);
