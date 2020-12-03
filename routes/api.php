<?php

use Illuminate\Http\Request;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::get('/wisata', [WisataController::class, 'get']);
Route::get('/kafe', [KafeController::class, 'get']);
Route::get('/kuliner', [KulinerController::class, 'get']);
Route::get('/oleholeh', [OlehOlehController::class, 'get']);
Route::get('/workingspace', [WorkingSpaceController::class, 'get']);

Route::get('/wisata/search', [WisataController::class, 'search']);
Route::get('/kafe/search', [KafeController::class, 'search']);
Route::get('/kuliner/search', [KulinerController::class, 'search']);
Route::get('/oleholeh/search', [OlehOlehController::class, 'search']);
Route::get('/workingspace/search', [WorkingSpaceController::class, 'search']);

Route::group(['middleware' => 'jwt.verify'], function () {
    Route::get('/user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');

    Route::post('/wisata', [WisataController::class, 'create']);
    Route::put('/wisata', [WisataController::class, 'update']);
    Route::delete('/wisata', [WisataController::class, 'delete']);
    
    Route::post('/kafe', [KafeController::class, 'create']);
    Route::put('/kafe', [KafeController::class, 'update']);
    Route::delete('/kafe', [KafeController::class, 'delete']);
    
    Route::post('/kuliner', [KulinerController::class, 'create']);
    Route::put('/kuliner', [KulinerController::class, 'update']);
    Route::delete('/kuliner', [KulinerController::class, 'delete']);
    
    Route::post('/oleholeh', [OlehOlehController::class, 'create']);
    Route::put('/oleholeh', [OlehOlehController::class, 'update']);
    Route::delete('/oleholeh', [OlehOlehController::class, 'delete']);
    
    Route::post('/workingspace', [WorkingSpaceController::class, 'create']);
    Route::put('/workingspace', [WorkingSpaceController::class, 'update']);
    Route::delete('/workingspace', [WorkingSpaceController::class, 'delete']);
});
