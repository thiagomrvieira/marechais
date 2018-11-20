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
    return view('welcome');
});

Route::get('/login', function () {
    return 'Tela de login';
});

Route::get('/cadastrar', function () {
    return 'cadastro de socio <br>
    		cadastro de clube <br>
    		cadastro de contas';
});

Route::get('/cadastrar/clube', 'CadastroController@cadastrarClube');

Route::get('/pagina', function () {
    return view('pagina');
});

Route::get('/produtos', 'ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}', 'ProdutoControlador@secaoProdutos');