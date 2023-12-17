<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog-details', [HomeController::class, 'blogdetails'])->name('blogdetails');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/car-details', [HomeController::class, 'carsdetails'])->name('carsdetails');
Route::get('/cars', [HomeController::class, 'cars'])->name('cars');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/auth', [HomeController::class, 'auth'])->name('auth');
Route::get('/form-mobil', [HomeController::class, 'formmobil'])->name('form-mobil');

//Auth Post
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Route Mobil
Route::post('/form-mobil', [MobilController::class, 'store'])->name('mobil.store');
Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
Route::put('/mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');
Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');