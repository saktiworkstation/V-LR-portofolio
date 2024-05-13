<?php

use App\Http\Controllers\CekController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experience/{id}/edit', [ExperienceController::class, 'edit']);
    Route::put('/experience/{id}/update', [ExperienceController::class, 'update']);
    Route::delete('/experience/{id}/delete', [ExperienceController::class, 'destroy']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/education', [EducationController::class, 'index'])->name('education');
    Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
    Route::get('/education/{id}/edit', [EducationController::class, 'edit']);
    Route::put('/education/{id}/update', [EducationController::class, 'update']);
    Route::delete('/education/{id}/delete', [EducationController::class, 'destroy']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/interest', [InterestController::class, 'index'])->name('interest');
});

require __DIR__.'/auth.php';
