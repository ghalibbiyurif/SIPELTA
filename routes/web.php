<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/admin', [PageController::class, 'adminDashboard']);
Route::get('/guru', [PageController::class, 'guruDashboard']);
Route::get('/data-master', [PageController::class, 'dataMaster']);
