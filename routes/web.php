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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');
Route::post('/user/post', 'UserController@store');

//rutas para la prueba del taller
Route::get('/marca/index', 'MarcaController@index');
Route::get('/marca/create', 'MarcaController@create');
Route::post('/marca/store', 'MarcaController@store');

