<?php 
require_once 'header.php';
 include_once '../../Model/accessoires.php';
include_once '../../Controller/accessoiresC.php';

$accessoiresC=new PlantesC() ;
$liste=$accessoiresC->trieraccessoiresasc();
 

?>
<div class='container'>
<div class="row justify-content-center">
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Table des Accessoires</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-users"></i> Accessoires Info</h4>
                <hr> 
                <thead>
                  <tr>
                  <th><i class="fa fa-user"></i> ID </th>
                  <th><i class="fa fa-user"></i> Categories</th>
                    <th><i class="fa fa-user"></i> matiere</th>
                    <th ><i class="fa fa-user"></i> Prix</th>
                    <th ><i class="fa fa-user"></i> image</th>

                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
			<?PHP
				foreach($liste as $accessoires):
			?>
                  <tr>
                    <td><?= $accessoires->id ?></td>
                    <td><?= $accessoires->categories ?></td>
					          <td><?= $accessoires->matiere ?></td>
					          <td><?= $accessoires->prix ?></td>
                    <td><a href=""><img src="image/home/<?= $accessoires->image ?>" alt="" height ="100" width="150"></a>
				
                    <td>
                    <td>
                      <button class="btn btn-danger btn-xs" onclick="window.location.href = 'supprimeracc.php?id=<?= $accessoires->id ?>';"> <i class="fa fa-trash-o "></i></button>
					            <button class="btn btn-success btn-xs" onclick="window.location.href = 'modifieracc.php?id=<?= $accessoires->id ?>';"> <i class="fa fa-pencil "></i></button>
                    <li><a href="trieracc.php">Tri Croissant </a></li>
			   	          <li><a href="trierracc.php">Tri Decroissant</a></li>
                      
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