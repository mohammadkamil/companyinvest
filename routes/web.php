<?php

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

Route::get('/', 'ProducSimulateController@create');
Route::post('/getProductUser', 'ProducUserController@index');
Route::post('/getCompany', 'ProducSimulateController@getCompany');
Route::get('/buy', 'ProducUserController@buy');
Route::post('/sell', 'ProducUserController@sell');
