<?php

include 'sessionADM.php';
include 'vendas.php';
include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php include 'conexao.php';
          
          $sql = "SELECT * FROM vendas GROUP BY id_produto";
          $sql2 = "SELECT sum(valor) AS soma_valor FROM vendas GROUP BY id_produto";

          
          $consulta = mysqli_query($conexao, $sql);
          $consulta2 = mysqli_query($conexao, $sql2);
        
          
          while($dados = mysqli_fetch_array($consulta) and $dados2 = mysqli_fetch_array($consulta2)){
            $valor = $dados2['soma_valor'];
            $produto_id = $dados['id_produto'];

            $sql3 = "SELECT * FROM produtos WHERE id = '$produto_id'";
            $consulta3 = mysqli_query($conexao, $sql3);
            while($dados3 = mysqli_fetch_array($consulta3)){
            $produto = $dados3['nome']
            ?>

            ['<?php echo $produto?>', <?php echo $valor?>],
            <?php }} ?>
        ]);

        var options = {
          title: 'Total de vendas 2021',
          pieHole: 0.4,
          backgroundColor: 'transparent',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
    
<div class="container">


    <div class="title">
        <h1> Vendas</h1>
    </div>

    <div class="vendasP">
        
        <p>
        Produtos vendidos: <strong>
        <?php

        echo mysqli_num_rows($resultado);

        ?></strong>
        </p>
        <p>
        Total de vendas: <strong>
        <?php

        echo "R$", number_format($linha_valor['sum(valor)'], 2, ',', '');

        ?></strong>
        </p>

    </div>

</div>
<div id="donutchart" style="width: 900px; height: 500px;"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./script.js"></script>
</body>
</html>