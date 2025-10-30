<?php

$a = (int) 2;
$b = (int) 4;
$c = (int) 7;

$resultado_soma = $b + $a;
echo "Soma: $resultado_soma<br><br>";

$resultado_subtracao = $b - $a;
echo "Subtração: $resultado_subtracao<br><br>";

$resultado_multiplicacao = $b * $a;
echo "Multiplicação: $resultado_multiplicacao<br><br>";

$resultado_divisao = $c / $a;
echo "Divisão: $resultado_divisao<br><br>";

$resultado_resto = $c % $a;
echo "Resto da divisão: $resultado_resto<br><br>";

echo "<hr>";

$conta_corrente = 38564.32; // 38.564,32
var_dump($conta_corrente);
echo "Valor na conta corrente: R$ " . number_format($conta_corrente, 2, ",", ".") . "<br><br>";

$debito = 200.16;
var_dump($debito);
echo "Valor do débito: R$ " . number_format($debito, 2, ",", ".") . "<br><br>";

$saldo = $conta_corrente - $debito;
var_dump($saldo);
echo "saldo: R$ " . number_format($saldo, 2, ",", ".") . "<br><br>";

$numero_test = 3456743;
echo "Número formatado pt-br (REAL): " . number_format($numero_test, 2, ",", ".");