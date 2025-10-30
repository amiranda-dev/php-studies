<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de php</title>
</head>

<body>

    <?php

    echo "<h3>Pós-incremento</h3>";
    $a = 5;
    echo "Deve ser 5: " . $a++ . "<br>";
    echo "Deve ser 6: $a <br>";

    echo "<h3>Pré-incremento</h3>";
    $a = 5;
    echo "Deve ser 6: " . ++$a . "<br>";
    echo "Deve ser 6: $a <br>";

    echo "<h3>Pós-decremento</h3>";
    $a = 10;
    echo "Deve ser 10: " . $a-- . "<br>";
    echo "Deve ser 9: $a <br>";

    echo "<h3>Pré-decremento</h3>";
    $a = 15;
    echo "Deve ser 14: " . --$a . "<br>";
    echo "Deve ser 14: $a <br>";

    ?>

</body>

</html>