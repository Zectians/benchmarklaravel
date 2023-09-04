<?php

use App\Http\Controllers\PenggunaController;
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

Route::get('', [PenggunaController::class, 'index']);
Route::post('register', [PenggunaController::class, 'registerPengguna']);
Route::put('update/{pengguna}', [PenggunaController::class, 'updatePengguna']);
Route::delete('delete/{pengguna}', [PenggunaController::class, 'hapusPengguna']);    
