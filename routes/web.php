<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Models\All;
use App\Models\Login;
use App\Models\Menu;

// web utama
Route::get('/', [AllController::class, 'home']);
Route::get('/about', [AllController::class, 'about']);
Route::get('/menu', [AllController::class, 'menu']);
Route::get('/contact', [AllController::class, 'contact']);

// crud webAdmin
Route::get('/adminMenu', [AllController::class, 'adminMenu']);
// Route::resource('/adminMenu', MenuController::class);

// login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

