<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\RoleController;
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
    Route::get('/role', [RoleController::class, 'index'])->name('role');
    Route::get('/get_data_role', [RoleController::class, 'get_data_role'])->name('get_data_role');
    Route::post('/role', [RoleController::class, 'store'])->name('Tambah Role');
    Route::get('/role/delete/{id}', [RoleController::class, 'deleteRole'])->name('Hapus Role');
    Route::get('/kelas', [ClassController::class, 'index'])->name('kelas');
    Route::get('/get_data_kelas', [ClassController::class, 'get_data_kelas'])->name('get_data_kelas');
    Route::post('/kelas', [ClassController::class, 'store'])->name('Tambah Kelas');
    Route::get('/kelas/delete/{id}', [ClassController::class, 'deleteKelas'])->name('Hapus Kelas');
});



