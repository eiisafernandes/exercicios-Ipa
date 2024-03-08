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

Route::get('multiplicação', function(Request $request){
    $numero1 = $request->input('number1');
    $numero2 = $request->input('number2');
    $resultado = $numero1 * $numero2;
    return $resultado;

});

Route::get('média', function(Request $request){
    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');
    $numero3 = $request->input('num3');
    $numero4 = $request->input('num4');
    $numero5 = $request->input('num5');    
    $média = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5)/5;
    return $média;

});

Route::get('dividir', function(Request $request){
    $num1 = $request->input('n1');
    $num2 = $request->input('n2');
    $resultado = $num2 / $num1;
    return $resultado;    

});

Route::get('dobro', function(Request $request){
    $num1 = $request->input('n1');
    $dobro = $num1 * 2;
    return 'O dobro de ' . $num1 . ' é igual a: ' . $dobro . '.'; 

});

Route::get('área', function(Request $request){
    $lado1 = $request->input('base');
    $lado2 = $request->input('altura');
    $área = $lado1 * $lado2;
    return $área;

});

Route::get('desconto', function(Request $request){

    $preçoproduto = $request->input('produto');
    $descontoproduto = $request->input('desconto');
    $valordesconto = ($preçoproduto * $descontoproduto) /100;    
    $valorfinal = $preçoproduto - $valordesconto;
    return $valorfinal;

});

Route::get('salário', function(Request $request){
    $salárioinicial = $request->input('salario');
    $porcentagem = $request->input('porcentagem');
    $aumento = ($salárioinicial * $porcentagem) /100;
    $valorfinal = $salárioinicial + $aumento;
    return 'Salário Anterior: ' . $salárioinicial . ', Percentual de aumento: ' . $porcentagem . ', Salário Atual: ' . $valorfinal; 

});
