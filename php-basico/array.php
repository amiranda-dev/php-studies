<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de php</title>
</head>

<body>

    <?php

    /************************************/
    /********** array numérico **********/
    /************************************/

    // Criar um array numérico
    $frutas = ["Maça", "Banana", "Laranja"];
    var_dump($frutas);

    // Acessar elemento
    echo "Recuperar um elemento do array numérico: ". $frutas[0] . "<br><br>"; // Saída: Maçã

    // Adicionar um novo elemento a um array numérico
    $frutas[] = "Pera"; // Adiciona "Pera" ao final do array    

    // Remover um elemento de um array numérico
    unset($frutas[1]); // Remover "Banana"
    // var_dump($frutas);

    /************************************/
    /********* array associativo ********/
    /************************************/

    // Criar um array associativo
    $precos = [
        "maca" => 3.00,
        "banana" => 2.00,
        "laraja" => 2.50,
        "morango" => 7.50,
    ];
    var_dump($precos);

    // Acessar elemento
    echo "Laraja: R$ " . number_format($precos["laraja"], 2, ",", ".") . "<br><br>";  // Saída: 2.00
    // var_dump($precos);

    // Adicionar um novo elemento a um array associativo
    $precos['pera'] = 3.50; // Adicionar "pera" com preço 3.50
    // var_dump($precos);

    // Remover um elemento de um array associativo
    unset($precos['laraja']); // Remover "laranja"
    // var_dump($precos);
    
    ?>

</body>

</html>