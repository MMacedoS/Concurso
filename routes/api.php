<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1', 'namespace' => 'API'], function () {

    Route::group(['prefix' => 'pessoa'], function () {
		Route::get('/', '\App\Http\Controllers\PessoaFisicaController@index');
		Route::get('/{id}/visualizar', '\App\Http\Controllers\PessoaFisicaController@show');
		Route::post('/cadastrar', '\App\Http\Controllers\PessoaFisicaController@store');
		Route::patch('/{id}/atualizar', '\App\Http\Controllers\PessoaFisicaController@update');
		Route::patch('/{id}/delete', '\App\Http\Controllers\PessoaFisicaController@destroy');
    });

    Route::group(['prefix' => 'inscricao'], function () {
		Route::get('/{id}/inscricao', '\App\Http\Controllers\API\InscricaoController@show');
		Route::post('/cadastrar', '\App\Http\Controllers\API\InscricaoController@store')->name('inscricao.store');
		Route::patch('/{id}/atualizar', '\App\Http\Controllers\API\InscricaoController@update');
		Route::patch('/{id}/delete', '\App\Http\Controllers\API\InscricaoController@destroy');
    });

    Route::group(['prefix' => 'public'], function () {
		Route::get('/{id}', '\App\Http\Controllers\API\CidadeController@index');

    });

    Route::group(['prefix' => 'cargos'], function () {
		Route::get('/{id}', '\App\Http\Controllers\API\ConcursoController@show');

    });
});

Route::group(['prefix' => 'concurso'], function () {
    Route::get('/', '\App\Http\Controllers\API\ConcursoController@index')->name('concurso');
    Route::post('/', '\App\Http\Controllers\API\ConcursoController@store')->name('concurso.store');

});

Route::get('/inscricao', '\App\Http\Controllers\API\InscricaoController@index')->name('inscricao');
Route::get('/estado', '\App\Http\Controllers\API\EstadoController@create')->name('estado');
Route::post('/estado', '\App\Http\Controllers\API\EstadoController@store')->name('estados.store');
Route::get('/cidade', '\App\Http\Controllers\API\CidadeController@create')->name('cidade');
Route::post('/cidade', '\App\Http\Controllers\API\CidadeController@store')->name('cidade.store');

Route::get('/', '\App\Http\Controllers\API\LoginController@index')->name('login');

Route::get('/registrar', '\App\Http\Controllers\API\RegistroController@index')->name('registrar');
Route::post('/registrar', '\App\Http\Controllers\API\RegistroController@store')->name('registro.store');

// Route::middleware('auth:api')->group(function(){
    Route::post('/', '\App\Http\Controllers\API\LoginController@store')->name('login.store');
// });
Route::get('/{id}', '\App\Http\Controllers\API\InscricaoController@comprovante')->name('comprovante');

