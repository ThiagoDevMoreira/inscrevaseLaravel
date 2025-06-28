<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::post('/courses/{course}/subscribe', [SubscribeController::class, 'subscribe'])->name('courses.subscribe');
    Route::get('/courses/{course}/students', [SubscribeController::class, 'students'])->name('courses.students');
    Route::patch('/courses/{course}/progress', [SubscribeController::class, 'updateProgress'])->name('courses.progress.update');
});
