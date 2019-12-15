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
/*
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'User_control\\UserController@home');
    Route::get('/informar-problema', 'User_control\\UserController@informar_problema');
    Route::get('/solicitacoes-pendentes', 'User_control\\UserController@solicitacoes_pendentes');
}); */

Route::resource('/user', 'User_Control\\User_m2a');

Route::group(['prefix' => 'tecnico'], function(){
    Route::get('/', 'Tecnico_control\\Tec_control@home');
    Route::get('/solicitacoes', 'Tecnico_control\\Tec_control@solicitacoes');
    Route::get('/enviar-comentario', 'Tecnico_control\\Tec_control@comentario');
});
