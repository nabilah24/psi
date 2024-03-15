<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;

Route::get('/', [AllController::class, 'home']);
Route::get('/about', [AllController::class, 'about']);
Route::get('/menu', [AllController::class, 'menu']);
Route::get('/contact', [AllController::class, 'contact']);
