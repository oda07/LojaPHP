<?php

include 'conexao.php';

$busca = "SELECT * FROM vendas";
$resultado = mysqli_query($conexao, $busca);

$busca_valor = "SELECT sum(valor) FROM vendas";
$resultado2 = mysqli_query($conexao, $busca_valor);
$linha_valor = mysqli_fetch_assoc($resultado2);

?>