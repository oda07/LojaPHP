<?php

include 'conexao.php';

$nome = $_POST['nome'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];
$nome = $_POST['nome'];

$insere = "INSERT INTO produtos (nome, estoque, preco) VALUES ('$nome', '$estoque', '$preco')";
$query = mysqli_query($conexao, $insere);

if(!$query){
    echo "Ocorreu um erro durante o cadastro";
}
else{
    echo "Cadastro concluido com sucesso!";
}



?>