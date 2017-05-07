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

Route::group(['prefix' => 'v1'], function () {
    Route::resource('/pets', 'Api\PetsController');
	Route::resource('/tutores', 'Api\TutoresController');
	Route::resource('/especies', 'Api\EspeciesController');
	Route::resource('/racas', 'Api\RacasController');
	Route::resource('/enderecos', 'Api\EnderecosController');
});