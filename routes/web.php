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
Route::get('/admin/perfil/escolha',('PagController@escolha'));
//Rotas do gerenciador de temas
Route::get('/admin/temas',('PagController@temas'));
//Rotas do gerenciador de plugins
Route::get('/admin/plugins',('PagController@plugins'));
//Rotas das configurações
Route::get('/admin/settings',('PagController@settings'));
//Rotas de edição das informações do perfil
Route::get('/admin/edit',('PagController@edit'));

Route::resource('/admin/perfi', 'DadosController');

Route::get('/modelo1',('PagController@modeloteste1'));
Route::get('/modelo2',('PagController@modeloteste2'));
Route::get('/modelo3',('PagController@modeloteste3'));
Route::get('/modelo4',('PagController@modeloteste4'));
Route::get('/modelo5',('PagController@modeloteste5'));



Auth::routes();

Route::get('/admin', 'HomeController@index');
