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

Route::get('/', 'firstcontroller@index');
Route::get('/fiche/{id}', 'fichecontroller@show')->where('id', '[0-9]+');
Route::get('/form/fiche','fichecontroller@create');
Route::post('/form/addfiche','fichecontroller@store');
Route::get('/fiche/edit/{id}','fichecontroller@edit');
Route::post('/fiche/update/{id}','fichecontroller@update')->where('id', '[0-9]+');


