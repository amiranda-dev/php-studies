<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php

    $a = 10;
    $b = 8;
    $c = "7";

    if (($a == 10) and ($b == 8)) {
        echo "Utilizado AND: Verdadeiro <br><br>";
    } else {
        echo "Utilizado AND: False <br><br>";
    }

    if (($a == 8) or ($b == 7)) {
        echo "Utilizado OR: Verdadeiro <br><br>";
    } else {
        echo "Utilizado OR: False <br><br>";
    }

    if (($a == 10) xor ($b == 7)) {
        echo "Utilizado XOR: Verdadeiro <br><br>";
    } else {
        echo "Utilizado XOR: False <br><br>";
    }

    if (!empty($c)) {
        echo "Utilizado !: Verdadeiro <br><br>";
    } else {
        echo "Utilizado !: Falso <br><br>";
    }

    if (($a == 10) && ($b == 8)) {
        echo "Utilizado &&: Verdadeiro <br><br>";
    } else {
        echo "Utilizado &&: False <br><br>";
    }

    if (($a == 10) || ($b == 5)) {
        echo "Utilizado ||: Verdadeiro <br><br>";
    } else {
        echo "Utilizado ||: False <br><br>";
    }

    ?>

</body>

</html>