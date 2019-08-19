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
//Rota responsável por trazer o painel (tela principal):
Route::get('/', 'TwitterController@index');
Route::get('/painel', 'TwitterController@index');

//Rota responsável por listar todos os usuários:
Route::get('/painel/usuarios', ['as' => 'painel.usuarios', 'uses' => 'TwitterController@list']);

//Rota responsável por trazer um usuário específico:
Route::get('painel/usuarios/show/{id}', ['as' => 'painel.show', 'uses' => 'TwitterController@show']);

//Rota responsável pela view de cadastro:
Route::get('/painel/usuarios/cadastro', ['as' => 'painel.cadastro', 'uses'=> 'TwitterController@create']);

//Rota responsável por salvar os dados via post no banco de dados:
Route::post('/painel/usuarios/cadastro', ['as' => 'users.store', 'uses' => 'TwitterController@store']);



