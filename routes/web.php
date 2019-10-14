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
Route::get('/',('PagController@inicio'));
Route::resource('/form', 'DadosController');
Route::get('/modelos',('PagController@escolha'));
Route::get('/modelo1',('PagController@modeloteste1'));
Route::get('/modelo2',('PagController@modeloteste2'));



Auth::routes();

Route::get('/home', 'HomeController@index');
