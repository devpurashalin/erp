<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('change-password');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/users/create', [AdminController::class, 'userCreate'])->name('users.create');
    
    // Route::get('/users', [ProfileController::class, 'index'])->name('users.index');
    // Route::post('/users', [ProfileController::class, 'store'])->name('users.store');
    // Route::get('/users/{user}/edit', [ProfileController::class, 'edit'])->name('users.edit');
    // Route::patch('/users/{user}', [ProfileController::class, 'update'])->name('users.update');
    // Route::delete('/users/{user}', [ProfileController::class, 'destroy'])->name('users.destroy');
});

Route::get('/captcha', [CaptchaController::class, 'captcha'])->name('captcha');

require __DIR__.'/auth.php';
