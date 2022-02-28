<?php

include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$insere = "INSERT INTO clientes (nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";
$query = mysqli_query($conexao, $insere);

if(!$query){
    echo "Ocorreu um erro durante o registro";
}
else{
    echo "Registrado com sucesso!";
}



?>