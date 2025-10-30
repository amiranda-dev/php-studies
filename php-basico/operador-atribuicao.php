<?php 

$a = (int) 1;
$b = (int) 2;
$c = (int) 3;
$resultado = 6;

echo "Somar o valor $resultado pelo valor $a <br><br>";
$resultado += $a;
echo "Resultado da adição: $resultado <br><br>";

echo "Subtrair o valor $resultado pelo valor $b <br><br>";
$resultado -= $b;
echo "Resultado da subtração: $resultado <br><br>";

echo "Multiplicação o valor $resultado pelo valor $b <br><br>";
$resultado *= $b;
echo "Resultado da Multiplicação: $resultado <br><br>";

echo "Dividir o valor $resultado pelo valor $b <br><br>";
$resultado /= $b;
echo "Resultado da divisão: $resultado <br><br>";

echo "Resto do valor $resultado pelo valor $b <br><br>";
$resultado %= $b;
echo "Resultado da valor: $resultado <br><br>";

$dados = "Bom ";
$dados .= "dia, ";
$dados .= "Alisson";

echo $dados;