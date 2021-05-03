<?PHP
	$con = mysqli_connect("localhost","root","","projet");
	if($con){
		echo "connected";
	}



?>


<html>
  <head>
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['typee', 'prix'],
		  <?php
		  $sql="SELECT * FROM animaux";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			   echo"['".$result['typee']."',".$result['prix']."],";
		  }
		  
		  ?>
      
        ]);

        var options = {
          title: 'TYPE DES ANIMAUX PAR PRIX'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
