<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('conferences', ConferenceController::class)->only(['index', 'show', 'create', 'store', 'edit', 'update']);
Route::get('conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('conferences/store', [ConferenceController::class, 'store'])->name('conferences.store');
