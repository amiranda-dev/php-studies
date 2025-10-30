<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php

    // Capacidade máxima da garrafa
    $capacidade_garrafa = 450; // ml
    $agua_na_garrafa = 0; // ml
    $quantidade_por_dose = 50; // ml por cada "dose" de água

    do {

        $agua_na_garrafa += $quantidade_por_dose;
        echo "Você colocou mais $quantidade_por_dose ml na garrafa. Total de água na garrafa: $agua_na_garrafa ml.<br>";

        if($agua_na_garrafa < $capacidade_garrafa){
            echo "A garrafa ainda não está cheia, continue enchendo...<br><br>";
        }
        
    } while ($agua_na_garrafa < $capacidade_garrafa);

    echo "<br>A garrafa está cheia com $agua_na_garrafa ml de água!<br>";

    ?>

</body>

</html>