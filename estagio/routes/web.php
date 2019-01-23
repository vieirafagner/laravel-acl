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


Route::group(['middleware' => 'web'], function(){
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::resource('setor', 'SetorController');

Route::get('/usuariosP','UsuarioController@index')->name('usuariosP');
Route::get('/usuariosE','UsuarioController@indexE')->name('usuariosE');
Route::get('/usuariosSet','UsuarioController@create')->name('usuariosSet');
Route::post('/usuariosCadastro','UsuarioController@salvar')->name('usuarioscad');


