<?php

use App\Http\Controllers\CekController;
use App\Http\Controllers\ExperienceController;
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
    Route::get('/experience', [ExperienceController::class, 'index'])->middleware(['auth', 'verified'])->name('experience');
    Route::get('/experience/create', [ExperienceController::class, 'create'])->middleware(['auth', 'verified'])->name('experience.create');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->middleware(['auth', 'verified'])->name('experience.store');
    Route::get('/experience/{id}/edit', [ExperienceController::class, 'edit'])->middleware(['auth', 'verified']);
    Route::put('/experience/{id}/update', [ExperienceController::class, 'update'])->middleware(['auth', 'verified']);
});

require __DIR__.'/auth.php';
