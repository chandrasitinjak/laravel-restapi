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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create_barang', 'BarangController@store');
Route::get('/getAllData', 'BarangController@getAllData');

// Route::get('/barang/{id}', 'BarangController@show');
Route::post('/updateBarang/{id}', 'BarangController@update');
Route::post('/deleteBarang/{id}', 'BarangController@destroy');