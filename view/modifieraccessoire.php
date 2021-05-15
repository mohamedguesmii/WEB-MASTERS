<?php require_once 'header.php'; 
 include_once '../Model/accessoires.php';
include_once '../Controller/accessoiresC.php';


      $id=$_GET['id'];  
      $accessoiresC=new accessoiresC() ;
      $accessoires=$accessoiresC->recoverPlantesbyid($id);
      $error= array();
     
      if (
          isset($_POST['categories'])&&
          isset($_POST['matiere'])&&
          isset($_POST['prix'])&&
          isset($_POST['image'])
 
         )
       {

          if (empty($error))
           {
              $plantes = new accessoires(

                  $_POST['categories'],
                  $_POST['matiere'],
                  $_POST['prix'],
                  $_POST['image']
              );
              $accessoiresC->updatePlantes($plantes, $id);  
          }
    
      }
	  ?>
	 

        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white"style="color:green">Modifier un accessoires </h1>
                </div>
            </div>
        </div>
  
<div class='container'>
<div class="row justify-content-center">
<form class="contact__form" method="post" action="">


    <div class="row">
    <div class="col-md-4 form-group">    
    <label for="categories"style="color:green">categories:</label>
        <input name="categories" type="text" class="form-control" placeholder="Tapez la categorie "  value="<?=$accessoires['categories']?>"required>
    </div>

    
    <div class="col-md-4 form-group"> 
	<label for="matiere"style="color:green">matiere:</label>   
        <input name="matiere" type="text" class="form-control" placeholder="Tapez la matiere" value="<?=$accessoires['matiere']?>" required>
    </div>
	</div>
	
	<div class="row">	
    <div class="col-md-4 form-group">  
	<label for="prix"style="color:green">Prix:</label>  
        <input name="prix" type="text" class="form-control" placeholder="Tapez le prix" value="<?=$accessoires['prix']?>" required>
    </div>
	</div>

	<div class="row">
	<div class="col-md-4 form-group"> 	
    <label for="myfile"style="color:green">Image:</label>
    
<input type="text" class="form-control" id="image"  name="image" value="<?=$accessoires['image']?>"readonly>
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