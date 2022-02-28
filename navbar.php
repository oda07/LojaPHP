<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
</head>
<body onload="carregar()">
<script>
        function carregar(){
            var lnome = "<?php echo $_SESSION['nome']?>"
            var lsenha = "<?php echo $_SESSION['senha']?>"
            console.log(lnome);
            var btn = document.getElementById("painelbtn")
            if(lnome != "odair" || lsenha != "12345"){
                btn.style.display="none"
            }
        }
</script>
    
    <nav>
        <h2><a href="./lista.php">LOJA</a></h2>
        <a href="./painel.php"><button id="painelbtn"> Painel Admin</button></a>
        <a href="./logout.php"><button> Deslogar</button></a>
    </nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./script.js"></script>
</body>
</html>