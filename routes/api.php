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

Route::apiResource('artikel', App\Http\Controllers\artikelAPIController::class );

Route::apiResource('kategoriartikel', App\Http\Controllers\kategoriAPIController::class );

Route::apiResource('berita', App\Http\Controllers\beritaAPIController::class );


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('soal1','BabSatuController@a1');

Route::get('soal2','BabSatuController@a2');

Route::get('soal3','BabSatuController@a3');

Route::get('soal4','BabSatuController@a4');

Route::get('soal5','BabSatuController@a5');

Route::get('soal6','BabSatuController@a6');

Route::get('soal7','BabSatuController@a7');