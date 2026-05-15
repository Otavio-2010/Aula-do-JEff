<?php

$mes = $_REQUEST['campo_mes'];
$dia = $_REQUEST['campo_dia'];
$ano = $_REQUEST['campo_ano'];

function somatorio(int $n){
    $soma = 0;
    for($i = 1; $i <= $n; $i++){
        $soma += $i;
    }
    return $soma;
}

function somaDigitos(int $num){

    $soma = 0;
    while($num > 0){
        $digito = $num % 10;
        $soma += $digito;
        $num = (int)($num / 10);
    }
    return $soma;

}


function safadao($mes, $dia, $ano){

$safadeza = 0;

$safadeza = somatorio($mes) + ((somaDigitos($ano) * (50 - $dia))/10);

$anjo = 0;
$anjo = 100 - $safadeza;

echo "Não anjo: $safadeza% <br>";
echo "Anjo: $anjo%";

}

safadao($mes, $dia, $ano);
