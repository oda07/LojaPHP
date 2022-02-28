<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body>
    
    <div class="loginAsk">  
        <p>Ainda não possui cadastro?</p>
        <a href="./cadastroCliente.php"><button>Clique aqui</button></a>
    </div>
<div class="container">


    <div class="title">
        <h1>Acesse sua conta</h1>
    </div>

    <div class="inputs">
        <form action="login.php" method="POST">
                <input type="text" class="txt" name="nome" placeholder="Nome">
                <input type="text" class="txt" name="senha" placeholder="Senha">

                <input class="submitLogin" type="submit" value="Login">
        </form>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./script.js"></script>
</body>
</html>