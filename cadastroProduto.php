<?php
include 'sessionADM.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro Produto</title>
</head>
<body>
    
<div class="container">

    <div class="title">
        <h1>CADASTRO DE PRODUTO</h1>
    </div>

    <div class="inputs">
        <input type="text" class="txt" id="nome" placeholder="Nome">
        <input type="text" class="txt" id="estoque" placeholder="Estoque">
        <input type="text" class="txt" id="preco" placeholder="Preço">

        <button id="cadastrarProduto">Cadastrar</button>

        <p id="concluido"></p>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./script.js"></script>
</body>
</html>