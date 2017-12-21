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

Route::get('/', function () {
    return view('principal');
});

Route::get('/mensagens', 'MensagemController@lista');
Route::get('/mensagens/novo', 'MensagemController@novo');
Route::match(array('GET', 'POST'), '/mensagens/adiciona', 'MensagemController@adiciona');
Route::get('/mensagens/remove/{id?}', 'MensagemController@remove');
Route::get('/mensagens/mostra/{id?}', 'MensagemController@mostra');
Route::get('/comentarios/novo/{id?}', 'ComentarioController@novo');
Route::match(array('GET', 'POST'), '/comentarios/adiciona', 'ComentarioController@adiciona');
