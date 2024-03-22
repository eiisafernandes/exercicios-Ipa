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

Route::get('pontos', function(Request $request){
    $valordacompra = $request->input('compra');
    $pontos = $valordacompra / 10.00;
    return $pontos;

});

Route::get('comissão', function(Request $request){
    $valorVendas = $request->input('venda');
    $valorComissao = ($valorVendas * 5) / 100;
    return 'O valor da comissão é igual a ' . $valorComissao;

});

Route::get('dias', function(Request $request){
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    return 'Horas: ' . $horas . ', Minutos: ' . $minutos . ', Segundos: ' . $segundos;

});

Route::get('total', function(Request $request){
    $preçoProduto = $request->input('preço');
    $quantidade = $request->input('quantidade');
    $total = $preçoProduto * $quantidade;
    return 'O preço total é igual a ' . $total;

});

Route::get('exemplo/condicao', function (Request $request){
    $idade = $request->input('idade');
    $retorno = "";
    if($idade >=18){
        $retorno = "Maior de idade";
    }
    else{
        $retorno = "Menor de idade";
    }
    return $retorno;

});

Route::get('verificar/idade', function(Request $request){
    $idade = $request->input('idade');
    
    if($idade > 18){
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
    
});

Route::get('verificar/par', function(Request $request){
    $numero = $request->input('numero');

    if($numero % 2 == 0){
        return 'par';
    } else {
        return "impar";
    }

});

Route::get('dez', function(Request $request){
    $numero = $request->input('numero');

    if($numero > 10){
        return "Número maior que dez";
    } else {
        return "Número menor que dez";
    } 

});

Route::get('temperatura', function(Request $request){
    $temp = $request->input('temperatura');

    if($temp > 30) {
        return "Está quente!";
    } else {
        return "Não está quente.";
    }

});

Route::get('positivo', function(Request $request){
    $numero = $request->input('num');

    if($numero > 0){
        return "O número " . $numero .  " é positivo";
    } else if($numero < 0) {
        return "O número " . $numero .  " é negativo";
    } else {
        return "O número " . $numero .  " é igual a zero";
    }

});

Route::get('numeros', function(Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if($num1 > $num2){
        return "O maior número é " . $num1;
    } else {
        return " O maior número é " . $num2;
    }

});

Route::get('tres', function(Request $request){
    $numero = $request->input('num1');

    if($numero % 3 == 0) {
        return "O número é divisível por três";
    } else {
        return "O número não é divisível por três";
    }

});