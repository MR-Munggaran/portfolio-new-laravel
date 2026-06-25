<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;


Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');


Route::prefix('admin')->group(function () {
    Route::resource('about', AboutController::class)->except(['show']);
    Route::resource('experience', ExperienceController::class)->except(['show']);
    Route::resource('skill', SkillController::class)->except(['show']);
    Route::resource('study', StudyController::class)->except(['show']);
    Route::resource('project', ProjectController::class)->except(['show']);
});