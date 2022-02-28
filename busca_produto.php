<?php

include 'conexao.php';

$search = $_POST['search'];

if($search != ""){
    $busca_produto = "SELECT * FROM produtos WHERE nome LIKE '%$search%'";
    $resultado_busca_produto = mysqli_query($conexao, $busca_produto);

    while($linha = mysqli_fetch_assoc($resultado_busca_produto)){
    ?> <a href="produto.php?<?php echo "busca={$linha['nome']}";?>" style="text-decoration:none; color:black; font-weight:bold;"><?php echo $linha['nome']?></a><br>
    <?php
    }
}
else{
    $busca_produto = "SELECT * FROM produtos";
    $resultado_busca_produto = mysqli_query($conexao, $busca_produto);

    while($linha = mysqli_fetch_assoc($resultado_busca_produto)){
    ?> <a href="produto.php?<?php echo "busca={$linha['nome']}";?>" style="text-decoration:none; color:black; font-weight:bold;"><?php echo $linha['nome']?></a><br>
    <?php
    }
}

?>
