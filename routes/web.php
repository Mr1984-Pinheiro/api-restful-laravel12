<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackingController;

// Route::get('/', function () {
//     return redirect()->route('tasks.index');
// });

Route::resource('tasks', TaskController::class);

// Laravel PRO Treina Web
Route::get('/', HomeController::class);
Route::get('/tracking', TrackingController::class)->name('freight.tracking');

