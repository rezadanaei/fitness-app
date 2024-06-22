<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingProgramController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::middleware('auth')->group(function () {
    Route::put('/user/{id}/physical-info', [HomeController::class, 'updatePhysicalInfo'])->name('physicalInfo-update');
    Route::post('/training-programs', [TrainingProgramController::class, 'createProgram']);
    Route::get('/students/{student_id}/training-programs', [TrainingProgramController::class, 'getProgramForStudent']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/physical-info', [App\Http\Controllers\HomeController::class, 'getInfo'])->name('home.physical-info');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
