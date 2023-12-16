<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilControllerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blog-details', [HomeController::class, 'blogdetails']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/car-details', [HomeController::class, 'carsdetails']);
Route::get('/cars', [HomeController::class, 'cars']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);
Route::get('/auth', [HomeController::class, 'auth']);

//Auth Post
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
