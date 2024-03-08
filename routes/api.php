<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('usuario', function(Request $request){
    $nome = $request->input('nome');
    return $nome;
    
});

Route::get('informacoes/usuario', function(Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos de idade.';

});

Route::get('cidade', function(Request $request){
    $nome = $request->input('nome');
    $ano = $request->input('ano');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ' nasci no ano de ' . $ano . ' na cidade de ' . $cidade; 
    
});

Route::get('números', function(Request $request){
    $numero1 = $request->input('primeironumero');
    $numero2 = $request->input('segundonumero');
    $resultado = $numero1 + $numero2;
    return $resultado;

});

Route::get('três/números', function(Request $request){
    $numero1 = $request->input('primeironumero');
    $numero2 = $request->input('segundonumero');
    $numero3 = $request->input('terceironumero');
    $resultado = $numero1 - $numero2 - $numero3;
    return $resultado;

});

Route::get('divisão', function(Request $request){
    $numero1 = $request->input('number1');
    $numero2 = $request->input('number2');
    $resultado = $numero1 / $numero2;
    return $resultado;

});