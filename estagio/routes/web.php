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

Route::get('listagem','UsuarioController@index2')->name('estagiarios.index');
Route::get('chamada','UsuarioController@registro')->name('RegistrarPresenca');
Route::resource('usuarios','UsuarioController');
Route::resource('setor','SetorController');