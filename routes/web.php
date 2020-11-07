<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KafeController;
use App\Http\Controllers\KulinerController;

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

Route::get('/', [MainController::class, 'home']);
Route::get('/wisata', [WisataController::class, 'list']);
Route::get('/kafe', [KafeController::class, 'list']);
Route::get('/kuliner', [KulinerController::class, 'list']);

Route::get('/wisata/{id}', [WisataController::class, 'detail']);
Route::get('/kafe/{id}', [KafeController::class, 'detail']);
Route::get('/kuliner/{id}', [KulinerController::class, 'detail']);
