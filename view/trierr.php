<?php 
require_once 'header.php';
include_once '../Model/Plante.php';
include_once '../Controller/PlanteC.php';

$PlanteC=new PlantesC() ;
$liste=$PlanteC->trierplantesasc();
 

?>
<div class='container'>
<div class="row justify-content-center">
    <section id="main-content">
      <section class="wrapper">
<<<<<<< HEAD
        <h3><i class="fa fa-angle-right"></i> Table de Plantes</h3>
=======
        <h3><i class="fa fa-angle-right"></i> Table de Plante</h3>
>>>>>>> d621535b94b93d125300d6e7b48fbf520a20873e
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-users"></i> Plante Info</h4>
                <hr> 
                <thead>
                  <tr>
<<<<<<< HEAD
=======
                  <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div> 
>>>>>>> d621535b94b93d125300d6e7b48fbf520a20873e
                    <th><i class="fa fa-user"></i> ID </th>
                    <th><i class="fa fa-user"></i> Nom </th>
                    <th><i class="fa fa-user"></i> Longeur</th>
                    <th ><i class="fa fa-user"></i> Prix</th>
<<<<<<< HEAD
                    <th><i class="fa fa-calendar-o"></i> Type</th>
                    <th><i class="fa fa-calendar-o"></i> image</th>
=======
                    <th><i class="fa fa-user"></i> Type</th>
                    <th><i class="fa fa-user"></i> image</th>
                    <th><b><i class="fa fa-calendar-o"></i>   Trier Prix </b></th>
                    <th><b><i class="fa fa-calendar-o"></i>   statistiques des plantes selon le type </b></th>
>>>>>>> d621535b94b93d125300d6e7b48fbf520a20873e

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
			<?PHP
				foreach($liste as $plante):
			?>
                  <tr>
<<<<<<< HEAD
                    <td><?= $plante['id']?></td>
                    <td><?= $plante['nom'] ?></td>
				          	<td><?= $plante['longeur'] ?></td>
					          <td><?= $plante['prix'] ?></td>
					          <td><?= $plante['type'] ?></td>
                   <td><a href=""><img src="images/<?= $plante['image'] ?>" alt="" height="50" width="50"></a>
 

                   </td>
                  
                    <td>
                      <button class="btn btn-danger btn-xs" onclick="window.location.href = 'supprimer.php?id=<?= $plante['id'] ?>';"> <i class="fa fa-trash-o "></i></button>
					            <button class="btn btn-success btn-xs" onclick="window.location.href = 'modifier.php?id=<?= $plante['id'] ?>';"> <i class="fa fa-pencil "></i></button>
                      <ul>
					          <li><a href="trier.php">Tri Croissant </a></li>
			   	          <li><a href="trierr.php">Tri Decroissant</a></li>
					        </ul>
                      
                   </td>
=======
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
					              <li><a href="trier.php">Tri Croissant </a></li>
			   	              <li><a href="trierr.php">Tri Decroissant</a></li>
					           </ul>
                     <td>
                     <li><a href="stats.php"> statistiques des plantes selon le prix d'achat </a></li>
                    
                     </td>
                    </td>
                   
>>>>>>> d621535b94b93d125300d6e7b48fbf520a20873e
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
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> d621535b94b93d125300d6e7b48fbf520a20873e
