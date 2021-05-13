<?php require_once 'header.php'; 
 include_once '../Model/Plante.php';
include_once '../Controller/PlanteC.php';

?>
<?php
      $plantes=NULL;
      $PlanteC=new PlantesC() ;
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
              $PlanteC->addplantes($plantes);   
              
               }
    
      }
	  ?>
	 

        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Ajouter une plante </h1>
                </div>
            </div>
        </div>
  
<div class='container'>
<div class="row justify-content-center">
<form class="contact__form" method="post" action="">
<div class="row">
<div class="col-md-4 form-group">    
<label for="nom">Nom:</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div>
                        <select name="nom" id="nom" class="form-control"  >
					     <option value="select">Selectionnez nom du plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>plante ail des ours </option>
						     <option>plante paquerette </option> 
						             <option>plante plantain-laneole</option>
                       				<option>plante sureau-noir</option>
                         			<option>plante verte</option>
                         			<option>plante viollettes</option>
                         			<option>plante vivace fleur</option>
                        
						</select>
        
    </div>
    <div class="col-md-4 form-group"> 
	<label for="longeur">Longeur:</label>  
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div> 
        <input name="longeur" type="text" class="form-control" placeholder="Tapez la longeur" required>
    </div>
	</div>
	
	<div class="row">
		
      <div class="col-md-4 form-group">  
	  <label for="prix">Prix:</label>  
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div> 
        <input name="prix" type="text" class="form-control" placeholder="Tapez le prix" required>
    </div>
	
    <div class="col-md-4 form-group">
    <label for="type">type:</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div> 
                        <select name="type" id="type" class="form-control"  >
					     <option value="select">Selectionnez type de plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>Coreopsis </option>
						 <option>Herbes </option> 
						 <option>Forgéres</option>
                        <option>garras</option>
                        <option>graminés</option>
						</select>
       
    </div>
	</div>
	<div class="row">
	<div class="col-md-4 form-group"> 
	
    <label for="myfile">Image:</label>
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