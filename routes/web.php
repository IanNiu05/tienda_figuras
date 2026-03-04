<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunkoController;
use App\Http\Controllers\HotwheelsController;
use App\Http\Controllers\LegoController;
use App\Http\Controllers\PrincipalController;

//Redirige directo a la página principal
Route::get('/', [PrincipalController::class, 'index'])->name('principal');

Route::get('/funkos', [FunkoController::class, 'index'])->name('funkos');
Route::get('/hotwheels', [HotwheelsController::class, 'index'])->name('hotwheels');
Route::get('/lego', [LegoController::class, 'index'])->name('lego');