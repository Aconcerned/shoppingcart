<?php  
  $con = new mysqli('localhost','root','','practica1');
  $sql = "SELECT pre.* FROM precios as pre, productos as pro where pre.id_productos=pro.id";
  $res = $con->query($sql);
  $con->close();
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'precio'],
          <?php 
          while($fila = $res->fetch_assoc()){
            echo "['".$fila["fecha"]."',".$fila["precio"]."],";
          }
          ?>
        ]);

        var options = {
          title: 'PRECIO/PRODUCTOS',
          hAxis: {title: 'Precio',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>