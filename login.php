<?php
include 'conexao.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$busca = "SELECT * FROM clientes WHERE nome = '$nome' and senha = '$senha'";
$busca_usuario = mysqli_query($conexao, $busca);

if(mysqli_num_rows($busca_usuario) != 1){

    header("refresh:0;url=index.php");
    
    exit();
}
 else {
    session_start();
    $linha = mysqli_fetch_assoc($busca_usuario);
    
    $_SESSION['id'] = $linha['id'];
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['senha'] = $linha['senha'];

    header("refresh:0;url=lista.php");
 }