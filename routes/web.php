<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Models\All;
use App\Models\Login;
use App\Models\Menu;
use App\Models\User;

// web utama
Route::get('/', [AllController::class, 'index']);

Route::get('/home', [AllController::class, 'home']);
Route::get('/about', [AllController::class, 'about']);
Route::get('/menu', [AllController::class, 'menu']);
Route::get('/contact', [AllController::class, 'contact']);

Route::get('/shopping', [CartController::class, 'index']);
Route::get('/shopping-cart', [CartController::class, 'menuCart'])->name('shopping.cart');
Route::get('/menu/{id}', [CartController::class, 'addMenutoCart'])->name('addmenu.to.cart');
Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/delete-cart-item', [CartController::class, 'deleteItem'])->name('delete.cart.item');

// crud webAdmin
Route::get('/dashboard', [AllController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/user', [AllController::class, 'user'])->name('admin.user');
Route::get('/tables', [AllController::class, 'tables'])->name('admin.tables');
Route::get('/maps', [AllController::class, 'maps'])->name('admin.maps');
Route::get('/userProfile', [AllController::class, 'userProfile'])->name('admin.userProfile');


Route::resource('/adminMenu', MenuController::class);


// login
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login_action']);

//register
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register_action']);
