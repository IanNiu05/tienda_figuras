<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunkoController;
use App\Http\Controllers\HotwheelsController;
use App\Http\Controllers\LegoController;

// Redirige al inicio directamente a funkos
Route::get('/', function () {
    return redirect('/funkos');
});

Route::get('/funkos', [FunkoController::class, 'index'])->name('funkos');
Route::get('/hotwheels', [HotwheelsController::class, 'index'])->name('hotwheels');
Route::get('/lego', [LegoController::class, 'index'])->name('lego');