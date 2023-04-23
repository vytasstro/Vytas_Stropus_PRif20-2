<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('/', ConferenceController::class)->only(['index']);
Route::resource('/conferences', ConferenceController::class)->only(['show']);
Route::post('/store', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::get('/edit/{id}', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/update/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::delete('/destroy/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();