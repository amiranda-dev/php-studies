<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php

    // Lista de compras
    $lista_compras = [
        "Arroz",
        "Feijão",
        "Leite",
        "Maçãs",
        "Bananas"
    ];
    // var_dump($lista_compras);

    echo "<h3>Itens para comprar:</h3>";

    // Loop para percorrer a lista de compras
    foreach ($lista_compras as $item){
        echo "- $item <br>";
    }

    ?>

</body>

</html>