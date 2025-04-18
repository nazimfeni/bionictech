<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

Route::view('/', 'posts.index')->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
//Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/map', function () {
    return view('map');
});



Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
