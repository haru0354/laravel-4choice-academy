<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/{lesson_id}', function ($lesson_id) {
    return view('drills', ['lesson_id' => $lesson_id]);
})->middleware(['auth', 'verified'])->name('drills');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
