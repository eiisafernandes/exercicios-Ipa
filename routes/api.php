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

Route::get('exercicio1', function(Request $request){
    $numero = $request->input('numero');

    if($numero > 10){
        return "Número maior que dez";
    } else {
        return "Número menor que dez";
    } 

});

Route::get('exercicio7', function(Request $request){
    $temp = $request->input('temperatura');

    if($temp > 30) {
        return "Está quente!";
    } else {
        return "Não está quente.";
    }

});

Route::get('exercicio2', function(Request $request){
    $numero = $request->input('num');

    if($numero > 0){
        return "O número " . $numero .  " é positivo";
    } else if($numero < 0) {
        return "O número " . $numero .  " é negativo";
    } else {
        return "O número é igual a zero";
    }

});

Route::get('exercicio5', function(Request $request){
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

    Route::get('exercicio3', function(Request $request){
        $numero = $request->input('idade');

        if($numero >= 18)
            return "Você é maior de idade";
        
    });

Route::get('exercicio4', function(Request $request){
    $numero = $request->input('numero');

    if($numero % 2 == 0) {
        return "O numero é par";
    } else {
        return "O número é ímpar";
    }

});

Route::get('exercicio6', function(Request $request){
    $numero = $request->input('num');

    if($numero % 9 == 0){
        return "O número é divisível por nove.";
    } else {
        return "O número não é divisível por nove";
    }

});

Route::get('exercicio8', function(Request $request){
    $numero = $request->input('numero');

    if($numero % 7 == 0){
        return "O número é múltiplo de 7";
    } else {
        return "O número não é múltiplo de 7";
    }

});

Route::get('exercicio9', function(Request $request){
    $idade = $request->input('idade');

    if($idade < 12){
        return "Você é uma criança";
    } else {
        return "Você não é uma criança";
    }

});

Route::get('exercicio10', function(Request $request){
    $numero = $request->input('numero');

    if($numero > 0){
        if($numero % 2 != 0){
        return "O número é positivo e ímpar";
        } 
    }   
     
});

Route::get('exercicio11', function(Request $request){
    $numero = $request->input('numero');

    if($numero < 100) {
        return "O número é menor que 100";
    } else if($numero > 100) {
        return "O número é maior que 100";
    } else {
        return "O número é igual a 100";
    }

});

Route::get('exercicio12', function(Request $request){
    $numero = $request->input('numero');

    if($numero % 6 == 0){
        return "O número é divisível por 6";
    } else {
        return "O número não é divisível por 6";
    }

});

Route::get('exercicio13', function(Request $request){
    $nome = $request->input('nome');

    if($nome = "Alice"){
        return "Olá, Alice!";
    }

});
 
Route::get('exercicio14', function(Request $request){
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');

    if($idade >= 18) {
        if($carteira = "Sim"){
            return "Você pode dirigir";
        }
    } 
    if($idade < 18){
        if($carteira = "Não"){
            return "Você não pode dirigir";
        }
    }

});

Route::get('exercicio16', function(Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if ($num1 < $num2){
        if ($num1 != $num2){
            return "O " . $num1 . " é menor que " . $num2;
        }
    } 
    if ($num2 < $num1){
        return "O " . $num2 . " é menor que " . $num1;
    }

}); 

Route::get('exercicio17', function(Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');

    if($idade >= 18){
        return "Você é maior de idade, " . $nome;
    }

});

Route::get('exercicio18', function(Request $request){
    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');
        
    if($numero1 == 0){
        return "Não é possível efetuar a divisão pois o primeiro número é zero";
    }
    else if ($numero2 == 0){
        return "Não é possível efetuar a divisão pois o segundo número é zero";
    } else {
        return $numero1 / $numero2;
    }
    
});

Route::get('exercicio19', function(Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado = $num1 * $num2;

    if ($resultado > 100){
        return "O número é maior que 100";
    } else {
        return "O número é menor que 100";
    }

});

Route::get('exercicio20', function(Request $request){
    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');
    $soma = $numero1 + $numero2;
    
    if($soma % 2 == 0){
        return $numero1 * $numero2;
    } else {
        return $numero1 / $numero2;
    }

});



