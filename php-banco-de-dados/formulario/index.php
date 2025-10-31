<?php 
    require_once('../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>

    <?php 

        // Receber os dados do formulário
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(isset($data['csrf_token'])){
            // var_dump($data);

            // criar a query
            $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
            // prepar a query
            $stmt = $conn->prepare($sql);

            // substituir os links pelos valores
            $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
            
            // executar a query
            $stmt->execute();

            if($stmt->rowCount()){
                echo "<p style='color:#086;' id='mensagem'>Usuário cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color:#086;'>Usuário não cadastrado!</p>";
            }
        }   
    ?>

    <h1>Cadastre-se</h1>
    <form action="" method="post">

        <input type="hidden" name="csrf_token" value="123456">

        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Nome Completo" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Melhor e-mail" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <script src="./script.js"></script>
</body>
</html>