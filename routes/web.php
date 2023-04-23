<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

Route::resource('/', ConferenceController::class)->only(['index']);
Route::resource('/conferences', ConferenceController::class)->only(['show']);
Route::post('/store', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::get('/edit/{id}', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/update/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::delete('/destroy/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
