<?php

use Illuminate\Http\Request;

use App\Http\Controllers\MainController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KafeController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\OlehOlehController;
use App\Http\Controllers\WorkingSpaceController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/wisata', [WisataController::class, 'get']);
Route::get('/kafe', [KafeController::class, 'get']);
Route::get('/kuliner', [KulinerController::class, 'get']);
Route::get('/oleholeh', [OlehOlehController::class, 'get']);
Route::get('/workingspace', [WorkingSpaceController::class, 'get']);
