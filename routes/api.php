<?php
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use illuminate\Support\Facades\Route;

Route::get('/obats', [ObatController::class, 'index']);
Route::get('/obats/{id}', [ObatController::class, 'show']);
Route::post('/obats', [ObatController::class, 'store']);
Route::delete('/obats/{id}', [ObatController::class, 'destroy']);
Route::put('/obats/{id}', [ObatController::class, 'update']);

Route::get('/pasiens', [PasienController::class, 'index']);
Route::get('/pasiens/{id}', [PasienController::class, 'show']);
Route::post('/pasiens', [PasienController::class, 'store']);
Route::delete('/pasiens/{id}', [PasienController::class, 'destroy']);
Route::put('/pasiens/{id}', [PasienController::class, 'update']);