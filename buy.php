<?php

include 'conexao.php';

$id = $_GET['pID'];
$id_cliente = $_GET['cID'];
$preco = $_GET['pPreco'];

$busca = "SELECT * FROM produtos WHERE id = '$id'";
$busca_produto = mysqli_query($conexao, $busca);
$resultado = mysqli_fetch_assoc($busca_produto);

$estoque = $resultado['estoque'] - 1;

$compra = "UPDATE produtos SET estoque = '$estoque' WHERE id = '$id'";
$query = mysqli_query($conexao, $compra);

////////////////////

$busca2 = "SELECT * FROM clientes WHERE id = '$id_cliente'";
$busca_cliente = mysqli_query($conexao, $busca2);
$resultado2 = mysqli_fetch_assoc($busca_cliente);

$registro = "INSERT INTO vendas (id_produto, id_cliente, valor) VALUES ('$id', '$id_cliente', '$preco')";
$query2 = mysqli_query($conexao, $registro);

header("Location:./produto.php?busca={$resultado['nome']}");
