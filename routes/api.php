<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NilaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, "authenticate"]);

Route::get('/dashboard', [DashboardController::class, 'index']); 

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswaPost', [MahasiswaController::class, 'tambah']);
Route::delete('/mahasiswaDelete/{id}', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswaGet/{id}', [MahasiswaController::class, 'get']);
Route::put('mahasiswaPut/{id}', [MahasiswaController::class, 'put']);
Route::get('mahasiswaSearch/{key}', [MahasiswaController::class, 'search']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/dosenPost', [DosenController::class, 'tambah']);
Route::delete('/dosenDelete/{id}', [DosenController::class, 'delete']);
Route::get('/dosenGet/{id}', [DosenController::class, 'get']);
Route::put('dosenPut/{id}', [DosenController::class, 'put']);
Route::get('dosenSearch/{key}', [DosenController::class, 'search']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawaiPost', [PegawaiController::class, 'tambah']);
Route::delete('/pegawaiDelete/{id}', [PegawaiController::class, 'delete']);
Route::get('/pegawaiGet/{id}', [PegawaiController::class, 'get']);
Route::put('pegawaiPut/{id}', [PegawaiController::class, 'put']);
Route::get('pegawaiSearch/{key}', [PegawaiController::class, 'search']);

Route::get('/nilai', [NilaiController::class, 'index']);
Route::post('/nilaiPost', [NilaiController::class, 'tambah']);
Route::delete('/nilaiDelete/{id}', [NilaiController::class, 'delete']);
Route::get('/nilaiGet/{id}', [NilaiController::class, 'get']);
Route::put('nilaiPut/{id}', [NilaiController::class, 'put']);
Route::get('nilaiSearch/{key}', [NilaiController::class, 'search']);
