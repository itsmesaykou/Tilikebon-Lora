<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthController::class, 'home']);

Route::get('/dashboard', [AuthController::class, 'index'])->middleware('auth')->name('home');
 Route::get('/login', [AuthController::class, 'login']);

// Register User
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'register_action'])->middleware('guest');

// Login User 
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login_form');
Route::post('/login/action', [AuthController::class, 'login_action'])->middleware('guest');

// Profile User (Auth)
Route::get('/profile', [UserController::class, 'profile']);

// Change Password
Route::get('/password', [AuthController::class, 'password'])->middleware('auth')->name('password');
Route::post('/password/changes', [AuthController::class, 'password_action'])->middleware('auth')->name('password_action');

// User Logout
Route::get('/logout', [AuthController::class, 'destroy']);


// UserDelete
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->middleware('auth');

// User view 
Route::get('/view/{id}', [UserController::class, 'view'])->middleware('auth');

// Plant view 
Route::get('/plant', [PlantController::class, 'index'])->middleware('auth');




