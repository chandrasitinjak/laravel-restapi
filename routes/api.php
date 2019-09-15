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

Route::post('/barangs', 'BarangController@store');
Route::get('/barangs', 'BarangController@getAllData');

Route::put('/barangs/{id}', 'BarangController@update');
Route::delete('/barangs/{id}', 'BarangController@destroy');

// Route::resource('/barangs', 'BarangController');