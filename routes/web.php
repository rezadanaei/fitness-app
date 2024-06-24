<?php

use App\Http\Controllers\Admin\TrainingProgramController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::prefix('admin-panel')->name('admin.')->group(function () {
    // View Index
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    // Sections View
    Route::resource('users', UserController::class);
    Route::resource('training-programs', TrainingProgramController::class);
});
