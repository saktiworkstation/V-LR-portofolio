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
    return view('landing-page');
})->name('/');

Route::get('/pdf/show/cv', [PDFController::class, 'showCV'])->name('showcv');
Route::get('/pdf/download/cv', [PDFController::class, 'downloadCV'])->name('downloadcv');

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
    Route::get('/interest/create', [InterestController::class, 'create'])->name('interest.create');
    Route::post('/interest/store', [InterestController::class, 'store'])->name('interest.store');
    Route::get('/interest/{id}/edit', [InterestController::class, 'edit']);
    Route::put('/interest/{id}/update', [InterestController::class, 'update']);
    Route::delete('/interest/{id}/delete', [InterestController::class, 'destroy']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/message', [MessageController::class, 'index'])->name('message');
    Route::delete('/message/{id}/delete', [MessageController::class, 'destroy']);
});
Route::get('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/skill', [SkillController::class, 'index'])->name('skill');
    Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');
    Route::get('/skill/{id}/edit', [SkillController::class, 'edit']);
    Route::put('/skill/{id}/update', [SkillController::class, 'update']);
    Route::delete('/skill/{id}/delete', [SkillController::class, 'destroy']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/{id}/edit', [ProjectController::class, 'edit']);
    Route::put('/project/{id}/update', [ProjectController::class, 'update']);
    Route::delete('/project/{id}/delete', [ProjectController::class, 'destroy']);
});

require __DIR__.'/auth.php';
