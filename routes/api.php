<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;
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

Route::prefix('petition')->group(function() {
    Route::post('/save', [PetitionController::class, 'savePetition'])->name('petition.save');
    Route::get('/get-data', [PetitionController::class, 'getLandingPageData'])->name('petition.getData');
    Route::get('/get-assistances', [PetitionController::class, 'getAssistances'])->name('petition.index');
    Route::post('/getInfo', [PetitionController::class, 'getInfo'])->name('petition.getInfo');
    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
