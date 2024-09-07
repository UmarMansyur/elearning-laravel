<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticationController::class, 'index']);
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'teacher'], function () {
    Route::get('/dashboard', [DashboardController::class, 'teacher'])->name('dashboard');
    Route::get('/modul', [ModuleController::class, 'index'])->name('modul');
});



