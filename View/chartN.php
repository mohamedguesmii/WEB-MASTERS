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
          ['nom', 'quantity'],
		  <?php
		  $sql="SELECT * FROM nourriture";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			   echo"['".$result['nom']."',".$result['quantity']."],";
		  }
		  
		  ?>
      
        ]);

        var options = {
          title: 'NOM DES NOURRITURE PAR QUANTITY'
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