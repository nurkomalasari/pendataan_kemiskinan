<?php

use App\Http\Controllers\API\HasilSurveyController;
use App\Http\Controllers\API\LoginController;
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



Route::group(['middleware' => 'checkRole:surveyor'], function () {
    Route::post('hasilSurvey/create', [HasilSurveyController::class, 'store']);
    Route::get('/pertanyaan', [PertanyaanController::class, 'index']);
    Route::get('/opsiJawaban', [OpsiJawabanController::class, 'index']);
});

Route::group(['middleware' => 'checkRole:surveyor'], function () {
    Route::post('hasilSurvey/create', [HasilSurveyController::class, 'store']);
    Route::get('/pertanyaan', [PertanyaanController::class, 'index']);
    Route::get('/opsiJawaban', [OpsiJawabanController::class, 'index']);
});



Route::post('/login', [LoginController::class, 'login']);
