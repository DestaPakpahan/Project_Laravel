<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\NotulenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LihatController;

Route::get('/', fn () => redirect()->route('rapat.index'));

Route::resource('rapat', RapatController::class);

Route::get('rapat/{rapat}/notulen/create', [NotulenController::class, 'create'])->name('notulen.create');
Route::post('rapat/{rapat}/notulen', [NotulenController::class, 'store'])->name('notulen.store');

Route::get('notulen/{notulen}/edit', [NotulenController::class, 'edit'])->name('notulen.edit');
Route::put('notulen/{notulen}', [NotulenController::class, 'update'])->name('notulen.update');
Route::delete('notulen/{notulen}', [NotulenController::class, 'destroy'])->name('notulen.destroy');

Route::get('/Lihat', [LihatController::class, 'Lihat']) ->name('Lihat.index');
Route::get('/notulen', [NotulenController::class, 'notulen']) ->name('notulen.notulen');
Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');


use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/', fn () => redirect()->route('login'));
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('auth.simple')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');

    Route::get('/Lihat', [LihatController::class, 'Lihat']) ->name('Lihat.index');

    Route::middleware('admin.only')->group(function () {
        Route::resource('rapat', RapatController::class);
        Route::get('/notulen', [NotulenController::class, 'notulen']) ->name('notulen.notulen');
    });
});


