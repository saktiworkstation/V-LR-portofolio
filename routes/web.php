<?php

use App\Http\Controllers\CekController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
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
    return view('layouts.landing');
})->name('/');

Route::get('/pdf/show/cv', [PDFController::class, 'showCV'])->name('showcv');
Route::get('/pdf/download/cv', [PDFController::class, 'downloadCV'])->name('downloadcv');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile','destroy')->name('profile.destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(ExperienceController::class)->group(function () {
        Route::get('/experience', 'index')->name('experience');
        Route::get('/experience/create', 'create')->name('experience.create');
        Route::post('/experience/store', 'store')->name('experience.store');
        Route::get('/experience/{id}/edit', 'edit');
        Route::put('/experience/{id}/update', 'update');
        Route::delete('/experience/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(EducationController::class)->group(function () {
        Route::get('/education', 'index')->name('education');
        Route::get('/education/create', 'create')->name('education.create');
        Route::post('/education/store', 'store')->name('education.store');
        Route::get('/education/{id}/edit', 'edit');
        Route::put('/education/{id}/update', 'update');
        Route::delete('/education/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(InterestController::class)->group(function () {
        Route::get('/interest', 'index')->name('interest');
        Route::get('/interest/create', 'create')->name('interest.create');
        Route::post('/interest/store', 'store')->name('interest.store');
        Route::get('/interest/{id}/edit', 'edit');
        Route::put('/interest/{id}/update', 'update');
        Route::delete('/interest/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/message', [MessageController::class, 'index'])->name('message');
    Route::delete('/message/{id}/delete', [MessageController::class, 'destroy']);
});
Route::get('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(SkillController::class)->group(function () {
        Route::get('/skill', 'index')->name('skill');
        Route::get('/skill/create', 'create')->name('skill.create');
        Route::post('/skill/store', 'store')->name('skill.store');
        Route::get('/skill/{id}/edit', 'edit');
        Route::put('/skill/{id}/update', 'update');
        Route::delete('/skill/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/project', 'index')->name('project');
        Route::get('/project/create', 'create')->name('project.create');
        Route::post('/project/store', 'store')->name('project.store');
        Route::get('/project/{id}/edit', 'edit');
        Route::put('/project/{id}/update', 'update');
        Route::delete('/project/{id}/delete', 'destroy');
    });
});

require __DIR__.'/auth.php';
