<?php require_once 'header.php'; 
 include_once '../model/Plante.php';
include_once '../controller/PlanteC.php';


      $id=$_GET['id'];  
      $PlanteC=new PlantesC() ;
      $plante=$PlanteC->recoverPlantesbyid($id);
      $error= array();
     
      if (
          isset($_POST['nom'])&&
          isset($_POST['longeur'])&&
          isset($_POST['prix'])&&
          isset($_POST['type'])&&
          isset($_POST['image'])
 
         )
       {

          if (empty($error))
           {
              $plantes = new Plante(

                  $_POST['nom'],
                  $_POST['longeur'],
                  $_POST['prix'],
                  $_POST['type'],
                  $_POST['image']
              );
              $PlanteC->updatePlantes($plantes, $id);  
          }
    
      }
	  ?>
	 

        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Modifier une plante </h1>
                </div>
            </div>
        </div>
  
<div class='container'>
<div class="row justify-content-center">
<form class="contact__form" method="post" action="">
<div class="row">
<div class="col-md-4 form-group">    
<label for="nom">Nom:</label>
        <input name="nom" type="text" class="form-control" placeholder="Tapez le nom"  value="<?=$plante['nom']?>"required>
    </div>
    <div class="col-md-4 form-group"> 
	<label for="longeur">Longeur:</label>   
        <input name="longeur" type="text" class="form-control" placeholder="Tapez la longeur" value="<?=$plante['longeur']?>" required>
    </div>
	</div>
	
	<div class="row">
		
      <div class="col-md-4 form-group">  
	  <label for="prix">Prix:</label>  
        <input name="prix" type="text" class="form-control" placeholder="Tapez le prix" value="<?=$plante['prix']?>" required>
    </div>
	
    <div class="col-md-4 form-group">
    <label for="type">type:</label>
        <input name="type" type="text" class="form-control" placeholder="Tapez le type" value="<?=$plante['type']?>" required>
    </div>
	</div>
	<div class="row">
	<div class="col-md-4 form-group"> 
	
    <label for="myfile">Image:</label>
    
<input type="text" class="form-control" id="img"  name="image"value="<?=$plante['image']?>" readonly>
</div>
</div>
	
    

    <div class="col-12 mt-4">
        <input name="confirm" type="submit" class=" btn btn-primary" value="Confirm">
    </div>
	
</div>
</form>
</div>  
</div>
</div>
</div>




	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>