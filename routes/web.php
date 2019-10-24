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
Route::get('/admin/perfil',('PagController@perfil'));
//Rotas do gerenciador de temas
Route::get('/admin/temas',('PagController@temas'));
//Rotas do gerenciador de plugins
Route::get('/admin/plugins',('PagController@plugins'));
//Rotas das configurações
Route::get('/admin/settings',('PagController@settings'));

Route::resource('/admin/perfi', 'DadosController');

Route::get('/modelo1',('PagController@modeloteste1'));
Route::get('/modelo2',('PagController@modeloteste2'));



Auth::routes();

Route::get('/admin', 'HomeController@index');
