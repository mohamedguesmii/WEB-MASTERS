<?php 
require_once 'header.php';
include_once '../Model/accessoires.php';
include_once '../Controller/accessoiresC.php';

$accessoiresC=new accessoiresC() ;
$liste=$accessoiresC->displayaccessoires();
 

?>
<?php
            $R= rand(0,255);
            $G= rand(0,255);
            $B= rand(0,255);
            echo "<div style='color:green; text-shadow: 100px 220px 330px rgb(".$R.",".$G.",".$B.");front-size:500px;text-align: center;'><b></b></div>";

                ?>
<div class='container'>
<div class="row justify-content-center">
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"  ></i> Table des Accessoires</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel" >
              <table class="table table-striped table-advance table-hover" >
                <h4><i class="fa fa-users" style="color:green"  ></i> Accessoires Info </h4>
                <hr> 
                <thead>
                  <tr>
                  <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div> 
                  <th><i class="fa fa-user"style="color:blue"  ></i> ID </th>
                  <th><i class="fa fa-user"style="color:blue" ></i> Categories</th>
                    <th><i class="fa fa-user"style="color:blue"  ></i> matiere</th>
                    <th ><i class="fa fa-user"style="color:blue"  ></i> Prix</th>
                    <th ><i class="fa fa-user"style="color:blue"  ></i> image</th>
                    <th ><i class="fa fa-user" style="color:blue" ></i> trier</th>
                   

                    <th><b><i class="fa fa-calendar-o"style="color:blue" ></i>   statistiques des assecoisre selon le type </b></th>

                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
			<?PHP
				foreach($liste as $accessoires):
			?>
                  <tr>
                    <td><?= $accessoires['id'] ?></td>
                    <td><?= $accessoires['categories'] ?></td>
					          <td><?= $accessoires['matiere'] ?></td>
					          <td><?= $accessoires['prix'] ?></td>
                    <td><a href=""><img src="images/<?= $accessoires['image'] ?>" alt="" height ="50" width="50"></a>
				
                   
                    <td>
                      <button class="btn btn-danger btn-xs" onclick="window.location.href = 'supprimeraccessoire.php?id=<?= $accessoires['id'] ?>';"> <i class="fa fa-trash-o "></i></button>
					            <button class="btn btn-success btn-xs" onclick="window.location.href = 'modifieraccessoire.php?id=<?= $accessoires['id'] ?>';"> <i class="fa fa-pencil "></i></button>
                    <li><a href="trieracc.php">Tri Croissant </a></li>
			   	          <li><a href="trierracc.php">Tri Decroissant</a></li>
                      
                   </td>
                   <td>
                     <li><a href="statsaccess.php"> statistiques des assecoire selon le prix d'achat </a></li>
                    
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