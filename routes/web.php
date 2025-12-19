<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackingController;

// Route::get('/', function () {
//     return redirect()->route('tasks.index');
// });

Route::resource('tasks', TaskController::class);

// Laravel PRO Treina Web
Route::get('/', HomeController::class)->name('home');
Route::get('/tracking', TrackingController::class)->name('freight.tracking');
Route::get('/tracking/{tracking_code}', TrackingController::class)->name('tracking_code');
Route::get('/history', HistoryController::class)->name('freight.history');

