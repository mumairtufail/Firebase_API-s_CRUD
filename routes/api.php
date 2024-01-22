<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', [TestController::class, 'create']);
Route::get('/', [TestController::class, 'index']);
Route::put('/', [TestController::class, 'edit']);
Route::delete('/', [TestController::class, 'delete']);


// composer require kreait/laravel-firebase --ignore-platform-req=ext-sodium

// use this to install sdk fro firebase 

// AND THIS TO SEND DATA USING COMMAND

// Invoke-WebRequest -Uri http://localhost:8000/api/ -Method POST -Body @{title='hello from me'; content='This is from curl'}