<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php

    $saldo_conta_corrente = 100.00;
    $preco_pizza = 80.00;

    if ($saldo_conta_corrente >= $preco_pizza) {
        echo "Você tem saldo suficiente, pode pedir a pizza!<br><br>";
    } else {
        echo "Você não tem saldo suficiente para pedir a pizza!<br><br>";
    }

    ?>

</body>

</html>