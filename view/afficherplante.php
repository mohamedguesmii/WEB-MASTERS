<?php 
require_once 'header.php';
include_once '../model/Plante.php';
include_once '../controller/PlanteC.php';

$PlanteC=new PlantesC() ;
$liste=$PlanteC->displayPlantes();
 

?>
<div class='container'>
<div class="row justify-content-center">
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"style="color:green"></i> Table de Plante</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-users"style="color:green"></i> Plante Info</h4>
                
                <hr> 
                <thead>
                  <tr>
                  <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div> 
                    <th><i class="fa fa-user"style="color:green"></i> ID </th>
                    <th><i class="fa fa-user"style="color:green"></i> Nom </th>
                    <th><i class="fa fa-user"style="color:green"></i> Longeur</th>
                    <th ><i class="fa fa-user"style="color:green"></i> Prix</th>
                    <th><i class="fa fa-user"style="color:green"></i> Type</th>
                    <th><i class="fa fa-user"style="color:green"></i> image</th>
                    <th><b><i class="fa fa-calendar-o"style="color:green"></i>   Trier Prix </b></th>
                    <th><b><i class="fa fa-calendar-o"style="color:green"></i>   statistiques des plantes selon le type </b></th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
			<?PHP
				foreach($liste as $plante):
			?>
                  <tr>
                    <td><?= $plante['id'] ?></td>
                    <td><?= $plante['nom']?></td>
				          	<td><?= $plante['longeur'] ?></td>
					          <td><?= $plante['prix'] ?></td>
					          <td><?= $plante['type'] ?></td>
                    <td><a href=""><img src="images/<?= $plante['image'] ?>"  alt="" height ="50" width="50"></a>
                  

                    </td>
                  
                    <td>
                      <button class="btn btn-danger btn-xs" onclick="window.location.href = 'supprimerplante.php?id=<?= $plante['id'] ?>';"> <i class="fa fa-trash-o "></i></button>
					            <button class="btn btn-success btn-xs" onclick="window.location.href = 'modifierplante.php?id=<?= $plante['id'] ?>';"> <i class="fa fa-pencil "></i></button>
                      <ul>
					              <li><a href="trier.php"style="color:red">Tri Croissant </a></li>
			   	              <li><a href="trierr.php"style="color:black">Tri Decroissant</a></li>
					           </ul>
                     <td>
                     <li><a href="stats.php"> statistiques des plantes selon le prix d'achat </a></li>
                    
                     </td>
                    </td>
                   
                  </tr>
				  </td>
                  </tr>
                  <?php endforeach ; ?>
                  <tr>
                  
                   
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
		</div>
		</div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->

  </section>

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>