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
}
