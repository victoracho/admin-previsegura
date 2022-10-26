<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\VocemController;
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
Route::prefix('vocem')->group(function () {
    Route::get('/validate-link/{id}', [VocemController::class, 'validateLink'])->name('vocem.uploadView');
});


Route::prefix('petition')->group(function () {
    Route::post('/save', [PetitionController::class, 'savePetition'])->name('petition.save');
    Route::post('/delete', [PetitionController::class, 'deletePetition'])->name('petition.delete');
    Route::get('/get-data', [PetitionController::class, 'getLandingPageData'])->name('petition.getData');
    Route::get('/get-assistances', [PetitionController::class, 'getAssistances'])->name('petition.index');
    Route::post('/getInfo', [PetitionController::class, 'getInfo'])->name('petition.getInfo');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
