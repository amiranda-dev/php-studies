<?php

// Incluir o arquivo com a conexão com banco de dados
require_once('./conexao.php');

// require: Inclui o arquivo, erro fatal se falhar.
// require_once: Inclui uma vez, erro fatal se falhar.
// include: Inclui o arquivo, erro não fatal se falhar.
// include_once: Inclui uma vez, erro não fatal se falhar.


/********************************************/
/****** Colocar valores direto na QUERY *****/
/* Não utilizar, suscetível a SQL injection */
/********************************************/

// // Criar a QUERY cadastrar usuário
// $sql = "INSERT INTO users (name, email) VALUES ('Kelly', 'kelly@celke.com.br')";

// // Preparar a QUERY
// $stmt = $conn->prepare($sql);

// // Executar a QUERY
// $stmt->execute();


/*****************************************************/
/*** Usar link na QUERY e substituir com bindParam ***/
/****** Valor é definido no momento da execução ******/
/*****************************************************/

// $name = "Jessica";
// $email = "jessica@celke.com.br";

// // Criar a QUERY cadastrar usuário
// $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";

// // Preparar a QUERY
// $stmt = $conn->prepare($sql);

// // Substituir os links da QUERY pelos valores
// $stmt->bindParam(':name', $name, PDO::PARAM_STR);
// $stmt->bindParam(':email', $email, PDO::PARAM_STR);

// // Executar a QUERY
// $stmt->execute();


/***********************************************************/
/******* Usar link na QUERY e substituir com bindValue *****/
/*** Valor é definido no momento que o bindValue chamado ***/
/***********************************************************/

// Criar a QUERY cadastrar usuário
$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";

// Preparar a QUERY
$stmt = $conn->prepare($sql);

// Substituir os links da QUERY pelos valores
$stmt->bindValue(':name', 'Gabrielly', PDO::PARAM_STR);
$stmt->bindValue(':email', 'gabrielly@celke.com.br', PDO::PARAM_STR);

// Executar a QUERY
$stmt->execute();


/***********************************************************/
/******** Usar ? na QUERY e substituir com bindValue *******/
/****** Instrução preparada com pontos de interrogação *****/
/*** Valor é definido no momento que o bindValue chamado ***/
/***********************************************************/

// Criar a QUERY cadastrar usuário
// $sql = "INSERT INTO users (name, email) VALUES (?, ?)";

// // Preparar a QUERY
// $stmt = $conn->prepare($sql);

// // Substituir os links da QUERY pelos valores
// $stmt->bindValue(1, 'Ferucio', PDO::PARAM_STR);
// $stmt->bindValue(2, 'ferucio@celke.com.br', PDO::PARAM_STR);

// // Executar a QUERY
// $stmt->execute();

echo "<p style='color: #086;'>Executou todos os comandos!</p>";

