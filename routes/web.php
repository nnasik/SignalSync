<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChannelController;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');

    // Define a route group with a URL prefix and the same controller
    Route::prefix('channel')->controller(ChannelController::class)->group(function () {
        Route::get('/', 'index')->name('channel.index');
        Route::get('/show/{id}', 'show')->name('channel.show');
        Route::post('/store', 'store')->name('channel.store');
        Route::put('/update/{id}', 'update')->name('channel.update');
        Route::delete('/delete/{id}', 'destroy')->name('channel.destroy');
    });
});

// // Define a route group with a URL prefix and the same controller
// Route::prefix('your-prefix')->controller(YourController::class)->group(function () {
//     Route::get('/', 'index')->name('yourprefix.index');
//     Route::get('/show/{id}', 'show')->name('yourprefix.show');
//     Route::post('/store', 'store')->name('yourprefix.store');
//     Route::put('/update/{id}', 'update')->name('yourprefix.update');
//     Route::delete('/delete/{id}', 'destroy')->name('yourprefix.destroy');
// });