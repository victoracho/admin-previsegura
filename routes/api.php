<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\VocemController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ClientController;

header('Access-Control-Allow-Origin: *');
//Access-Control-Allow-Origin: *
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
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

Route::post('login', [AuthController::class, 'signIn'])->name('auth.login');
Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('auth.resetPassword');
Route::post('forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgotPassword');
Route::post('register', [AuthController::class, 'signUp'])->name('auth.register');
Route::post('logout', [AuthController::class, 'logOut'])->name('auth.logout')->middleware(['auth:sanctum']);

Route::prefix('vocem')->group(function () {
    Route::get('/validate-link/{id}', [VocemController::class, 'validateLink'])->name('vocem.uploadView');
});

Route::prefix('clients')->group(function () {
    Route::get('/getContracts', [ClientController::class, 'getContracts'])->middleware(['auth:sanctum']);
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
