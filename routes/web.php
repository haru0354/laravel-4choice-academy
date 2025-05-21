<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')
    ->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/{lesson_id}', function ($lesson_id) {
    return view('drills', ['lesson_id' => $lesson_id]);
})->middleware(['auth', 'verified'])->name('drills');

Route::get('dashboard/{lesson_id}/learn', function ($lesson_id) {
    return view('learn', ['lesson_id' => $lesson_id]);
})->middleware(['auth', 'verified'])->name('learn');

Route::get('dashboard/{lesson_id}/flashcard', function ($lesson_id) {
    return view('flashcard', ['lesson_id' => $lesson_id]);
})->middleware(['auth', 'verified'])->name('flashcard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
