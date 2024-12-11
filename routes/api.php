<?php

use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\CreditController;
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

Route::prefix('v1')->group(function () {
    Route::get('/cars', [CarsController::class, 'list']);
    Route::get('/cars/{id}', [CarsController::class, 'get']);
    Route::get('/credit/calculate', [CreditController::class, 'calculate']);
    Route::post('/credit/request', [CreditController::class, 'save']);
});
