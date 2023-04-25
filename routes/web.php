<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\VocemController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return to_route('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/getAssistances', [PetitionController::class, 'getAssistances'])->name('petition.getAssistances');
    Route::get('/test', [PetitionController::class, 'test'])->name('petition.test');
    Route::post('/sendAssistances', [PetitionController::class, 'sendAssistances'])->name('petition.sendAssistances');
    Route::prefix('vocem')->group(function () {
        Route::get('/upload/', [VocemController::class, 'uploadView'])->name('vocem.uploadView');
        Route::post('/upload/csv', [VocemController::class, 'uploadCsv'])->name('vocem.uploadCsv');
        Route::get('/upload/progress/{id?}', [VocemController::class, 'uploadProgress'])->name('vocem.uploadProgress');
        Route::post('/upload/progress/{id?}', [VocemController::class, 'batchProgress'])->name('vocem.progress');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PetitionController::class, 'index'])->name('dashboard');
});
