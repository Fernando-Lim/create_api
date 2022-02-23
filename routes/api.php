<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('test-forum.api-hkbgaming888.com/api/login', 'App\Http\Controllers\DataController@login');
Route::post('test-forum.api-hkbgaming888.com/api/break', 'App\Http\Controllers\DataController@break');
Route::post('test-forum.api-hkbgaming888.com/api/lainnya', 'App\Http\Controllers\DataController@lainnya');
Route::post('test-forum.api-hkbgaming888.com/api/logout', 'App\Http\Controllers\DataController@signout');