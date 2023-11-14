<?php
require_once "conexao.php";
// Obter os dados do formulário
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
  $imagem= "img/". $_POST["imagem"];


    // Inserir os dados na tabela 'usuario'
    $sql = "INSERT INTO produtos (nome, tipo,preco,descricao,imagem) VALUES 
    ('$nome', '$tipo', '$preco','$descricao','$imagem')";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastrar-produto-sucesso.php");
        exit();
    } else {
        header("Location: cadastrar-produto.php?erro=2");
        exit();
    }
    $conn->close();
