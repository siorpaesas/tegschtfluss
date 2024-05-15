<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;

// Index Page
Route::get('/', [WelcomeController::class, 'index']);
// About Page
Route::get('/about', [WelcomeController::class, 'about']);

// Characters
Route::view('/characters', 'characters')->middleware('auth');

// Notes
Route::middleware('auth')->group(function () {
    Route::get('/chapters/{chapter}/note/create', [NoteController::class, 'create']);
    Route::get('/notes/{note}/edit', [NoteController::class, 'edit']);
    Route::patch('/notes/{note}/edit', [NoteController::class, 'update']);
    Route::post('/chapters/{chapter}/note/create', [NoteController::class, 'store']);
    Route::delete('/notes/{note}/delete', [NoteController::class, 'destroy']);
});

// Chapter resource
Route::resource('chapters', ChapterController::class)->middleware('auth');

// Dashboard
Route::get('/dashboard', [WelcomeController::class, 'index'])->middleware('auth');

// Builds
Route::get('/chapter/{chapter}/stats', [StatsController::class, 'create'])->middleware('auth');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('/settings', [SettingsController::class, 'show'])->middleware('auth');


