<?php 

    echo "<h1>Conversão implícita</h1>";

    $resultado = "2";

    echo "Primeiro exemplo: $resultado <br>";
    var_dump($resultado); # para debugar o código

    $resultado_dois = $resultado + 1;
    echo "Segundo exemplo: $resultado_dois <br>";
    var_dump($resultado_dois);

    $resultado_tres = $resultado + 3.5;
    echo "Terceiro exemplo: $resultado_tres <br>";
    var_dump($resultado_tres);

    echo "<hr>";

    echo "<h1>Conversão Explícita</h1>";

    $resultado_quatro = 11;
    var_dump($resultado_quatro);

    $resultado_cinco = (double) $resultado_quatro;
    echo "Quarto exemplo: $resultado_quatro <br>";
    var_dump($resultado_cinco);

    $resultado_seis = 6.9;
    echo "Sexto exemplo: $resultado_seis <br>";
    var_dump($resultado_seis);

    $resultado_sete = (int) $resultado_seis;
    var_dump($resultado_sete);
?>