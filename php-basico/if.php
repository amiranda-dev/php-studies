<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php

    $saldo_conta_corrente = 70.00;
    $preco_pizza = 80.00;

    if($saldo_conta_corrente >= $preco_pizza){
        echo "Você tem saldo suficiente, pode pedir a pizza!<br><br>";
    }

    if($saldo_conta_corrente <= $preco_pizza){
        echo "Você não tem saldo suficiente para pedir a pizza!<br><br>";
    }
    
    $temperatura = 32;
    $tem_sol = true;

    if ($temperatura >= 25 && $tem_sol) {
        echo "Pensamento do Curitibano: Bora piazada pra praia!<br><br>";
    }

    if ($temperatura >= 30 && $tem_sol) {
        echo "Pensamento do Cuiabano: Bora pra Chapada!<br><br>";
    }

    ?>

</body>

</html>