<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php

    // 1 - Pagamento com saldo da conta corrente
    // 2 - Pagamento com cartão de crédito
    $tipo_pagamento = 1;
    $saldo_conta_corrente = 100.00;
    $saldo_cartao_credito = 20.00;
    $preco_pizza = 80.00;

    if (($tipo_pagamento == 1) and ($saldo_conta_corrente >= $preco_pizza)) {
        echo "Você tem saldo suficiente na conta corrente, pode pedir a pizza!<br><br>";
    } elseif (($tipo_pagamento == 2) and ($saldo_cartao_credito >= $preco_pizza)) {
        echo "Você tem saldo suficiente no cartão de crédito, pode pedir a pizza!<br><br>";
    } else {
        echo "Você não tem saldo suficiente para pedir a pizza!<br><br>";
    }

    ?>

</body>

</html>