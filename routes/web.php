<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

Route::view('/','posts.index')->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::view('/register','auth.register')->name('register');

Route::post('/register',[AuthController::class, 'register']);

Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthController::class, 'login']);

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');









Route::get('/login', function () {
    return view('auth.login');
})->name('login');
