<?php

use App\Http\Controllers\Api\TaskApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Models\User;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

Route::get('/users', function () {
   return User::all(); 
});

Route::get('/banners', [BannerController::class, 'getAllBanners']);

Route::get('/tasks', [TaskApiController::class, 'index']);
Route::post('/tasks', [TaskApiController::class, 'store']);
Route::get('/tasks/{task}', [TaskApiController::class, 'show']);
Route::put('/tasks/{task}', [TaskApiController::class, 'update']);
Route::delete('/tasks/{task}', [TaskApiController::class, 'destroy']);


