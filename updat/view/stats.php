<?php
require_once 'header.php';
?>
<?php
  $con = mysqli_connect("localhost","root","","webmaster");
  if($con){
    echo "connected";
  }
?>
<html>
  <head>
  <center>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['nom', 'prix'],
         <?php
         $sql = "SELECT * FROM plante";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['nom']."',".$result['prix']."],";
          }

         ?>
        ]);

        var options = {
          title: ' STATISTIQUES DES PLANTES SELON LE PRIX '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
  </center>
</html>