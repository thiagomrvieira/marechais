<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public  function listar(){
    	$produtos = [
    		"notebook",
    		"mouse",
    		"teclado",
    		"impressora"
    	];
    	return view('produtos', compact('produtos'));
    }

    public  function secaoProdutos($palavra){
    	
    	return view('secao_produtos', compact('palavra'));
    }

    public function mostrar_opcoes(){
    	return view('mostrarOpcoes');
    }

    public function opcoes($opcao){
    	return view('opcoes', compact('opcao'));
    }

    public function loopFor($n){
    	return view('loopFor', compact('n'));
    }


    public function loopForeach(){
    	$produtos = [
    		["id" => 1, "nome" => "Computador"],
    		["id" => 2, "nome" => "Mouse"],
    		["id" => 3, "nome" => "Teclado"],
    	];

    	return view('loopForeach', compact('produtos'));
    }

}
