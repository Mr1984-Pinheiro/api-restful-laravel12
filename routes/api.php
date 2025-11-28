<?php

use App\Http\Controllers\Api\TaskApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Models\User;
use App\Http\Controllers\UserController;



Route::get('/users', [UserController::class, 'index']);
// Routes Store B7web Course
Route::get('/ping', function () { return response()->json(['message' => 'pong']); });
Route::get('/banners', [BannerController::class, 'getAllBanners']);
// Routes Tasks
Route::get('/tasks', [TaskApiController::class, 'index']);
Route::post('/tasks', [TaskApiController::class, 'store']);
Route::get('/tasks/{task}', [TaskApiController::class, 'show']);
Route::put('/tasks/{task}', [TaskApiController::class, 'update']);
Route::delete('/tasks/{task}', [TaskApiController::class, 'destroy']);


