<?php


Route::resource('/user', 'User_Control\\User_m2a')->middleware('auth');
#rotas de tecnico, prévia...
Route::group(['prefix' => 'tecnico'], function(){
    Route::get('/', 'Tecnico_control\\Tec_control@home');
    Route::get('/solicitacoes', 'Tecnico_control\\Tec_control@solicitacoes');
    Route::get('/enviar-comentario', 'Tecnico_control\\Tec_control@comentario');
});
#rotas adicionadas pelo 'auth'...
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
