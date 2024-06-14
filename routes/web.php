<?php

use App\Http\Controllers\CekController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SkillController;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Project;
use App\Models\Rating;
use App\Models\Skill;
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
    return view('layouts.landing',[
        'experiences' => Experience::latest()->get(),
        'educations' => Education::latest()->get(),
        'interests' => Interest::latest()->get(),
        'skils' => Skill::latest()->get(),
        'projects' => Project::latest()->get(),
        'ratings' => Rating::latest()->get(),
    ]);
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
        Route::get('/experience', 'index')->name('experience')->middleware('role:user');
        Route::get('/experience/create', 'create')->name('experience.create')->middleware('role:user');
        Route::post('/experience/store', 'store')->name('experience.store')->middleware('role:user');
        Route::get('/experience/{id}/edit', 'edit')->middleware('role:user');
        Route::put('/experience/{id}/update', 'update')->middleware('role:user');
        Route::delete('/experience/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(EducationController::class)->group(function () {
        Route::get('/education', 'index')->name('education')->middleware('role:user');
        Route::get('/education/create', 'create')->name('education.create')->middleware('role:user');
        Route::post('/education/store', 'store')->name('education.store')->middleware('role:user');
        Route::get('/education/{id}/edit', 'edit')->middleware('role:user');
        Route::put('/education/{id}/update', 'update')->middleware('role:user');
        Route::delete('/education/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(InterestController::class)->group(function () {
        Route::get('/interest', 'index')->name('interest')->middleware('role:user');
        Route::get('/interest/create', 'create')->name('interest.create')->middleware('role:user');
        Route::post('/interest/store', 'store')->name('interest.store')->middleware('role:user');
        Route::get('/interest/{id}/edit', 'edit')->middleware('role:user');
        Route::put('/interest/{id}/update', 'update')->middleware('role:user');
        Route::delete('/interest/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/message', [MessageController::class, 'index'])->name('message');
    Route::delete('/message/{id}/delete', [MessageController::class, 'destroy']);
});
Route::get('/message/create', [MessageController::class, 'create'])->name('message.create')->middleware('role:user');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store')->middleware('role:user');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(SkillController::class)->group(function () {
        Route::get('/skill', 'index')->name('skill')->middleware('role:user');
        Route::get('/skill/create', 'create')->name('skill.create')->middleware('role:user');
        Route::post('/skill/store', 'store')->name('skill.store')->middleware('role:user');
        Route::get('/skill/{id}/edit', 'edit')->middleware('role:user');
        Route::put('/skill/{id}/update', 'update')->middleware('role:user');
        Route::delete('/skill/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/project', 'index')->name('project')->middleware('role:user');
        Route::get('/project/create', 'create')->name('project.create')->middleware('role:user');
        Route::post('/project/store', 'store')->name('project.store')->middleware('role:user');
        Route::get('/project/{id}/edit', 'edit')->middleware('role:user');
        Route::put('/project/{id}/update', 'update')->middleware('role:user');
        Route::delete('/project/{id}/delete', 'destroy');
    });
});

Route::middleware(['auth', 'verified', 'role:user'])->group(function () {
    Route::controller(RatingController::class)->group(function () {
        Route::get('/rating', 'index')->name('rating');
        Route::get('/rating/user', 'user')->name('rating.user');
        Route::post('/rating/store', 'store')->name('rating.store');
        Route::put('/rating/{id}/update', 'update');
        Route::delete('/rating/{id}/delete', 'destroy');
    });
});

require __DIR__.'/auth.php';
