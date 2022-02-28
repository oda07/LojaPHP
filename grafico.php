<html>
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
              $produto = $dados['id_produto'];
              ?>

            ['<?php echo $produto?>', <?php echo $valor?>],
            <?php } ?>
        ]);

        var options = {
          title: 'Total de vendas 2021',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>