<?php

use App\Http\Controllers\API\HasilSurveyController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\OpsiJawabanController;
use App\Http\Controllers\API\PendudukController;
use App\Http\Controllers\API\PertanyaanController;
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




Route::post('hasilSurvey/create', [HasilSurveyController::class, 'store']);
Route::get('/pertanyaan', [PertanyaanController::class, 'index']);
Route::get('/opsiJawaban', [OpsiJawabanController::class, 'index']);
Route::get('/penduduk/{id}', [PendudukController::class, 'pendudukById']);
Route::get('/penduduk', [PendudukController::class, 'index']);
Route::get('/user/all', [LoginController::class, 'getUser']);

Route::get('/pendudukByDistrict', [PendudukController::class, 'searchByDistrict']);
Route::get('/list_district', [PendudukController::class, 'districtAll']);




Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
