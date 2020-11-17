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

Route::get('/wisata', ['middleware' => 'cors', 'uses' => 'WisataController@get']);
Route::get('/kafe', ['middleware' => 'cors', 'uses' => 'KafeController@get']);
Route::get('/kuliner', ['middleware' => 'cors', 'uses' => 'KulinerController@get']);
Route::get('/oleholeh', ['middleware' => 'cors', 'uses' => 'OlehOlehController@get']);
Route::get('/workingspace', ['middleware' => 'cors', 'uses' => 'WorkingSpaceController@get']);

Route::get('/wisata/search', ['middleware' => 'cors', 'uses' => 'WisataController@search']);
Route::get('/kafe/search', ['middleware' => 'cors', 'uses' => 'KafeController@search']);
Route::get('/kuliner/search', ['middleware' => 'cors', 'uses' => 'KulinerController@search']);
Route::get('/oleholeh/search', ['middleware' => 'cors', 'uses' => 'OlehOlehController@search']);
Route::get('/workingspace/search', ['middleware' => 'cors', 'uses' => 'WorkingSpaceController@search']);
