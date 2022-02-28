<?php

$conexao = mysqli_connect("localhost", "root", "", "loja");
if (!$conexao) {
echo "ERRO, FALHA NA CONEXÃO.";
exit;
}

?>