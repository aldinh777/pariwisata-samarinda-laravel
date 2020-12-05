<?php

use Illuminate\Http\Request;

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

Route::get('/wisata', 'WisataController@get');
Route::get('/kafe', 'KafeController@get');
Route::get('/kuliner', 'KulinerController@get');
Route::get('/oleholeh', 'OlehOlehController@get');
Route::get('/workingspace', 'WorkingSpaceController@get');

Route::get('/wisata/search', 'WisataController@search');
Route::get('/kafe/search', 'KafeController@search');
Route::get('/kuliner/search', 'KulinerController@search');
Route::get('/oleholeh/search', 'OlehOlehController@search');
Route::get('/workingspace/search', 'WorkingSpaceController@search');

Route::group(['middleware' => 'jwt.verify'], function () {
    Route::group(['middleware' => 'csrf'], function () {
        Route::get('/user', 'UserController@getAuthenticatedUser');

        Route::get('/wisata/get', 'WisataController@getLogged');
        Route::post('/wisata', 'WisataController@create');
        Route::put('/wisata', 'WisataController@update');
        Route::delete('/wisata', 'WisataController@delete');
        
        Route::get('/kafe/get', 'KafeController@getLogged');
        Route::post('/kafe', 'KafeController@create');
        Route::put('/kafe', 'KafeController@update');
        Route::delete('/kafe', 'KafeController@delete');
        
        Route::get('/kuliner/get', 'KulinerController@getLogged');
        Route::post('/kuliner', 'KulinerController@create');
        Route::put('/kuliner', 'KulinerController@update');
        Route::delete('/kuliner', 'KulinerController@delete');
        
        Route::get('/oleholeh/get', 'OlehOlehController@getLogged');
        Route::post('/oleholeh', 'OlehOlehController@create');
        Route::put('/oleholeh', 'OlehOlehController@update');
        Route::delete('/oleholeh', 'OlehOlehController@delete');
        
        Route::get('/workingspace/get', 'WorkingSpaceController@getLogged');
        Route::post('/workingspace', 'WorkingSpaceController@create');
        Route::put('/workingspace', 'WorkingSpaceController@update');
        Route::delete('/workingspace', 'WorkingSpaceController@delete');
    });
});
