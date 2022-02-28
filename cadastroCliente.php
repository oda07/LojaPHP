<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro Cliente</title>
</head>
<body>
    
    <div class="loginAsk">  
        <p>Já possui login?</p>
        <a href="./index.php"><button>Clique aqui</button></a>
    </div>
<div class="container">


    <div class="title">
        <h1>REGISTRE-SE</h1>
    </div>

    <div class="inputs">
        <input type="text" class="txt" id="nome" placeholder="Nome">
        <input type="text" class="txt" id="cpf" placeholder="CPF">
        <input type="text" class="txt" id="senha" placeholder="Senha">

        <button id="cadastrarCliente">Concluido</button>

        <p id="concluido"></p>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./script.js"></script>
</body>
</html>