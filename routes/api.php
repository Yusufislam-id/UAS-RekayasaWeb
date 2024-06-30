<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MakulController;
use App\Http\Controllers\AuthController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/mahasiswa/read', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/read/{nim}', [MahasiswaController::class, 'show']);
    Route::post('/mahasiswa/create', [MahasiswaController::class, 'store']);
    Route::put('/mahasiswa/update/{nim}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'destroy']);


    Route::get('/dosen/read', [DosenController::class, 'index']);
    Route::get('/dosen/read/{nidn}', [DosenController::class, 'show']);
    Route::post('/dosen/create', [DosenController::class, 'store']);
    Route::put('/dosen/update/{nidn}', [DosenController::class, 'update']);
    Route::delete('/dosen/delete/{nidn}', [DosenController::class, 'destroy']);

    Route::get('/makul/read', [MakulController::class, 'index']);
    Route::get('/makul/read/{idm}', [MakulController::class, 'show']);
    Route::post('/makul/create', [MakulController::class, 'store']);
    Route::put('/makul/update/{idm}', [MakulController::class, 'update']);
    Route::delete('/makul/delete/{idm}', [MakulController::class, 'destroy']);
});