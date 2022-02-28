<?php

include 'conexao.php';
include 'session.php';
include 'navbar.php';

$busca = $_GET['busca'];

$busca_produto = "SELECT * FROM produtos WHERE nome = '$busca'";
$resultado_busca_produto = mysqli_query($conexao, $busca_produto);

$resultado = mysqli_fetch_assoc($resultado_busca_produto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./script.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Produto</title>
</head>
<body>

<header>

    <div class="arrow">
        <a href="lista.php"><img src="arrow.png" width="50px" height="50px"></a>
    </div>

    <form action="buy.php" method="GET">
        <table>
            <tr>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th
                <?php 
                if($resultado['estoque'] <= 0){
                    ?>style="visibility: hidden;" <?php
                }
                    ?>
                ></th>
            </tr>
            <tr>
                <td> <?php echo $resultado['nome'] ?> </td>
                <td>
                <?php
                if($resultado['estoque'] <= 0){
                    echo "Fora de estoque";
                } else{
                    echo $resultado['estoque'];
                }?> 
                </td>
                
                <td> <?php echo $resultado['preco'] ?> </td>

                <input style="display:none" name="pPreco" value="<?php echo $resultado['preco'] ?>" type="text">
                <input style="display:none" name="pID" value="<?php echo $resultado['id'] ?>" type="text">
                <input style="display:none" name="cID" value="<?php echo $_SESSION['id'] ?>" type="text">
                
                <td 
                <?php 
                if($resultado['estoque'] <= 0){
                    ?>style="display:none" <?php
                }else{
                    ?>
                id="comprar"><input class="submitBuy" type="submit" value="Comprar"></td>
                <?php
                }
                ?>
            </tr>
        </table>
    </form>
</header>
</body>
</html>



<style>
    *{
        margin:0;
        padding:0;
    }

    body{
        height:100vh;
    }

    header{
        font-size:35px;
        width:60vw;
        margin:auto;
        border-bottom:0;
    }

    table{
        position:relative;
        margin: 30px auto 0 auto;
    }

    th, td, tr{
        width: 300px;
        text-transform: capitalize;
        background-color: rgb(181, 181, 179);
        position:relative;
        border: 1px solid black;
        text-align: center;
        font-weight:bold;
    }
    th{
        background-color:rgb(79, 128, 158);
        color:white;
    }
    #comprar{
        cursor:pointer;
    }
    #comprar:hover{
        background-color:rgb(150, 150, 150);
    }
    #comprar:active{
        transform: scale(0.98)
    }
</style>