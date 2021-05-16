<?PHP
	include "../controller/CommandesC.php";

	$commandesC=new CommandesC();
	$listecommande=$commandesC->afficherDem();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traiter Commande</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Nature</span>PET</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger"></span>
					</a>
						
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info"></span>
					</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
            <img src="images/logo.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">ADMIN</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
        <ul class="nav menu">

<li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu0" aria-controls="submenu0"><i class="fas fa-user-alt"></i>&nbsp;Gestion Des Comptes</a>
                                    <div id="submenu0" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ajoutercompte.php"> <em class="fas fa-user-alt">&nbsp;</em>Afficher les comptes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="validercompte.php"> <em class="fas fa-check-square">&nbsp;</em>Validation</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
     </li>
     <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu11" aria-controls="submenu11"><i class="fas fa-exclamation-triangle"></i>&nbsp;Gestion Reclamations</a>
                                    <div id="submenu11" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficherreclamation.php"> <em class="fa fa-book-open">&nbsp;</em>Afficher Reclamations</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
     </li>
    <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu1" aria-controls="submenu1"><i class="fa fa-paw"></i>&nbsp;Gestion Animaux</a>
                                    <div id="submenu1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ajouteranimaux.php"> <em class="fa fa-paw">&nbsp;</em>Ajouter Animaux</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficheranimaux.php"> <em class="fa fa-paw">&nbsp;</em>Afficher Animaux</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
     </li>

     <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu2" aria-controls="submenu2"> <em class="fas fa-bone">&nbsp;</em>Gestion Nouriture</a>
                                    <div id="submenu2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ajouternourriture.php"> <em class="fas fa-bone">&nbsp;</em>Ajouter Nouriture</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="affichernourriture.php"> <em  class="fas fa-bone" aria-hidden="true">&nbsp;</em>Afficher Nouriture</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
     </li>

     <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu22" aria-controls="submenu22"> <em class="fab fa-canadian-maple-leaf">&nbsp;</em>Gestion Plantes</a>
                                    <div id="submenu22" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ajouterplante.php"> <em class="fas fa-seedling">&nbsp;</em>Ajouter Plantes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficherplante.php"> <em  class="fas fa-seedling" aria-hidden="true">&nbsp;</em>Afficher Plantes</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
     </li>

     <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu33" aria-controls="submenu33"> <em class="fas fa-palette">&nbsp;</em>Gestion Accessoires</a>
                                    <div id="submenu33" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ajouteraccessoire.php"> <em class="fas fa-palette">&nbsp;</em>Ajouter Accessoires</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficheraccessoire.php"> <em  class="fas fa-palette" aria-hidden="true">&nbsp;</em>Afficher Accessoires</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
     </li>

    <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu3" aria-controls="submenu3"><i class="fas fa-calendar-check"></i>&nbsp;Gestion Evenement</a>
                                    <div id="submenu3" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ajouterevenement.php"> <em class="fa fa-plus-square">&nbsp;</em>Ajouter Evenement</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="evenement.php"> <em class="fa fa-book-open">&nbsp;</em>Afficher Evenement</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
     </li>

     <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu4" aria-controls="submenu4"> <em class="fas fa-percentage">&nbsp;</em>Gestion Promotions</a>
                                    <div id="submenu4" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="promoanimaux.php"> <em class="fa fa-paw">&nbsp;</em>Promotions Animaux</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="promoplantes.php"> <em  class="fab fa-pagelines" aria-hidden="true">&nbsp;</em>Promotions Plantes</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
     </li>
     <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu5" aria-controls="submenu5"> <em class="fas fa-shopping-cart">&nbsp;</em>Gestion Commandes</a>
                                    <div id="submenu5" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficherCommande.php"> <em class="fas fa-shopping-cart">&nbsp;</em>AFfficher Commandes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="TraiterCommande.php"> <em  class="fas fa-shopping-cart" aria-hidden="true">&nbsp;</em>Traiter Commandes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficherLigne.php"> <em  class="fas fa-shopping-cart" aria-hidden="true">&nbsp;</em>Afficher Ligne</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu6" aria-controls="submenu6"> <em class="fas fa-truck">&nbsp;</em>Gestion Livraison</a>
                                    <div id="submenu6" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="afficherLivraison.php"> <em class="fas fa-truck">&nbsp;</em>Afficher Livraison</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="TraiterDemLivraison.php"> <em  class="fas fa-truck" aria-hidden="true">&nbsp;</em>Traiter Livraison</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
     </li>
     </li>


</ul>
		</div><!--/.row-->
		<div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div>
    <div class="container"> 
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="container text-center">
             <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="d-flex justify-content-center">
        	<br> <div class="col-md-5"></div>
            

                
            </form>

        </div>
  <br>
         <!-- Bootstrap table  -->
		<div >
            <table class="table table-striped table-dark">
               
                    <tr >
                        <td><b>ID Commande</b> </td>
						<td><b>ID Client</b> </td>
                        <td><b>PAIMENT</b></td>
                        <td><b>MONTANT</b></td>
						<td><b>DEM ANNULATION</b></td>
						
					
					
						<td><b>Supprimer</b></td>

                    </tr>
                
                
				<?PHP
				foreach($listecommande as $user){
			?>
				<tr>
					<td><?PHP echo $user['idCommande']; ?></td>
					<td><?PHP echo $user['idClient']; ?></td>
					<td><?PHP echo $user['paiment']; ?></td>
					<td><?PHP echo $user['montant']; ?></td>
					<td><?PHP echo $user['DemAnnulation']; ?></td>
					
					



					
					
					<td>
						<form method="POST" action="SupprimerCommande.php">
						<button type="submit" style="background-color:transparent; border-color:transparent;"> 
						<img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>
                         </button>	
						<input type="hidden" value=<?PHP echo $user['idCommande']; ?> name="idCommande">
						</form>
					</td>
					
				</tr>
			<?PHP
				}
			?>

              
           </table>
        </div>
		
		

    </div>
            </div>
        </div>
    </div>
		
		

    </div>
            </div>
        </div>
    </div>
	</div>	<!--/.main-->
	
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