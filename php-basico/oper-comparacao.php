<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

    <?php   
    
    $a = (int) 10;
    $b = (int) 8;
    $c = (string) 10;

    var_dump($a);
    var_dump($b);
    var_dump($c);

    if( $a == $c){
        echo "Verdadeiro: o número $a é igual ao valor $c <br><br>";
    } else{
        echo "Falso: o número $a não é igual ao valor $c <br><br>";
    }
    
    if( $a === $c){
        echo "Verdadeiro: o número $a é igual ao valor ou tipo $c <br><br>";
    } else{
        echo "Falso: o número $a não é igual ao valor ou tipo $c <br><br>";
    }

    if( $a != $b){
        echo "Verdadeiro: o número $a é diferente ao valor $b <br><br>";
    } else{
        echo "Falso: o número $a não é diferente ao valor $b <br><br>";
    }

    if( $a < $b){
        echo "Verdadeiro: o número $a é menor do que o valor $b <br><br>";
    } else{
        echo "Falso: o número $a não é menor do que o valor $b <br><br>";
    }

    if( $a > $b){
        echo "Verdadeiro: o número $a é maior do que o valor $b <br><br>";
    } else{
        echo "Falso: o número $a não é maior do que o valor $b <br><br>";
    }

    if( $a <= $b){
        echo "Verdadeiro: o número $a é menor ou igual ao valor $b <br><br>";
    } else{
        echo "Falso: o número $a não é menor ou igual ao valor $b <br><br>";
    }

    if( $a >= $b){
        echo "Verdadeiro: o número $a é maior ou igual ao valor $b <br><br>";
    } else{
        echo "Falso: o número $a não é maior ou igual ao valor $b <br><br>";
    }

    ?>

</body>

</html>