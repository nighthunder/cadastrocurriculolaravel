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

Route::get('/', 'CadastroController@index');

Route::get('/cadastro/create', 'CadastroController@create');

Route::post('/cadastro', 'CadastroController@store');
