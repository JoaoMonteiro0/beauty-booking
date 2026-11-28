<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;

Route::view('/', 'pages.home')->name('home');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/services', [ServiceController::class, 'index'])
            ->name('services.index');

        Route::get('/services/create', [ServiceController::class, 'create'])
            ->name('services.create');

        Route::post('/services', [ServiceController::class, 'store'])
            ->name('services.store');

        Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])
            ->name('services.edit');

        Route::put('/services/{service}', [ServiceController::class, 'update'])
            ->name('services.update');
    });
