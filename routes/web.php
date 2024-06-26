<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SimplesEmail;
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

Route::get('/', function () {return view('login.index');});

Route::get('/login','App\Http\Controllers\Front\LoginController@login')->name('login');
Route::post('/logar','App\Http\Controllers\Front\LoginController@logar')->name('logar');
Route::get('/logout','App\Http\Controllers\Front\LoginController@logout')->name('logout');
Route::get('/recuperar-senha','App\Http\Controllers\Front\LoginController@recuperarSenha')->name('recuperar-senha');

Route::get('/cadastro','App\Http\Controllers\Front\CadastroController@cadastro')->name('cadastro');
Route::post('/cadastro-realizado','App\Http\Controllers\Front\CadastroController@cadastrar')->name('cadastro-realizado');

Route::middleware('autenticacao')->group(function(){
    Route::get('/pagina-principal','App\Http\Controllers\Front\PrincipalController@index')->name('tela-principal');
    Route::get('/perfil','App\Http\Controllers\Front\PrincipalController@perfil')->name('perfil');
    Route::post('/atualizar-perfil','App\Http\Controllers\Front\UsuarioController@atualizar')->name('atualizar-perfil');
    Route::get('/financeiro','App\Http\Controllers\Front\FinanceiroController@index')->name('financeiro');
    Route::get('/extratos','App\Http\Controllers\Front\FinanceiroController@extratos')->name('extratos');
    Route::get('/planos','App\Http\Controllers\Front\FinanceiroController@planos')->name('planos');
});

