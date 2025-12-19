<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\TaskApiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FreightController;
use App\Http\Controllers\StepController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('user/register', [AuthController::class, 'register']);
Route::post('user/login', [AuthController::class, 'login']);
Route::post('user/logout', [AuthController::class, 'logout']);

Route::apiResource('users', UserController::class);

// Routes Store B7web Course
Route::get('/ping', function () { return response()->json(['message' => 'pong']); });
Route::get('/banners', [BannerController::class, 'getAllBanners']);
Route::get('/products', [ProductController::class, 'getAllProducts']);
// Routes Tasks
Route::get('/tasks', [TaskApiController::class, 'index']);
Route::post('/tasks', [TaskApiController::class, 'store']);
Route::get('/tasks/{task}', [TaskApiController::class, 'show']);
Route::put('/tasks/{task}', [TaskApiController::class, 'update']);
Route::delete('/tasks/{task}', [TaskApiController::class, 'destroy']);
// Laravel PRO course TrainaWeb
Route::get('/customers', [CustomerController::class,'index']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::post('/freights', [FreightController::class, 'store']);
Route::post('/steps', [StepController::class, 'store']);