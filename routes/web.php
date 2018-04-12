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

Route::resource('/painel/produto', 'Painel\ProdutoController');


Route::group(['namespace' => 'Site'], function(){
	Route::get('/categoria/{id?}', 'SiteController@categoria');
	Route::get('/contato', 'SiteController@contato');
	Route::get('/', 'SiteController@index');
});
