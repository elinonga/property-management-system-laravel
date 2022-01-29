<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserPropertyController;
use App\Http\Controllers\UserUpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Register Urls
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Login Urls
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Edit User
Route::get('/users/{user}/update', [UserUpdateController::class, 'index'])->name('user.edit');
Route::put('/users/{user}', [UserUpdateController::class, 'update'])->name('user.update');

// Home Urls
Route::get('/', [HomeController::class, 'index'])->name('home');

// Property Urls
Route::get('/add-property', [PropertyController::class, 'create'])->name('add-property');
Route::post('/add-property', [PropertyController::class, 'store']);
Route::get('/view-property', [PropertyController::class, 'index'])->name('view-property');
Route::get('/view-property/{property}/edit', [PropertyController::class, 'edit'])->name('view-property.edit');
Route::put('/view-property/{property}', [PropertyController::class, 'update'])->name('view-property.update');
Route::delete('/view-property/{property}', [PropertyController::class, 'destroy'])->name('view-property.destroy');
Route::get('/view-property/{property}/details', [PropertyController::class, 'show'])->name('view-property.show');


// User Property Urls
Route::get('/users/{user:username}/properties', [UserPropertyController::class, 'index'])->name('user.properties');
Route::get('/agents/all', [UserPropertyController::class, 'show'])->name('agents.all');
