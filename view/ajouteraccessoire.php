<?php require_once 'header.php'; 
 include_once '../Model/accessoires.php';
include_once '../Controller/accessoiresC.php';

?>
<?php
      $plantes=NULL;
      $accessoiresC=new accessoiresC() ;
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
              $accessoiresC->addplantes($plantes);   
              
               }
    
      }
	  ?>
	 

        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white"style="color:blue">Ajouter un Accessoire  </h1>
                </div>
            </div>
        </div>
  
<div class='container justify-content-center' >

<div class="row justify-content-center">
<form class="contact__form" method="post" action="">

<div class="col-md-4 form-group">    
<label for="categories"style="color:green">categories:</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div>
                        <select name="categories" id="categories" class="form-control"  >
					     <option value="select">Selectionnez la categorie &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option> Plantes </option>
                         <option>  Animaux</option>
						</select>
    </div>
    <div class="col-md-4 form-group"> 
	<label for="matiere"style="color:green">matiere:</label> 
    <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div>  
    <select name="matiere" id="matiere" class="form-control"  >
                        
					     <option value="select">Selectionnez la matiere  &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>  collier chien </option>
                         <option>  panier chien </option>
                         <option>  panier Chat </option>
                         <option>  panier Oiseau </option>
                         <option>  harnais chien </option>
                         <option>  harnais chat </option>

                    <option>................................</option>
						 <option>  greffage plante </option>
                         <option>  etagere plante </option>
                         <option>  cache bois plante  </option>
                         <option>  Boll  </option>
                         <option> Cache Bois Plante</option>

						</select>
    </div>
	</div>
	
	<div class="row">
		
      <div class="col-md-4 form-group">  
	  <label for="prix"style="color:green">Prix:</label>  
      <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div>
        <input name="prix" type="text" class="form-control" placeholder="Tapez le prix" required>
    </div>
	</div>
	<div class="row">
	<div class="col-md-4 form-group"> 
    <label for="myfile"style="color:green">Image:</label>
    <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div>




<input type="file" class="form-control" id="img" name="image">
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