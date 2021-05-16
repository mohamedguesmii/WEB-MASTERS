<?php

	include "../controller/AnimauxC.php";
	include_once '../Model/Animaux.php';
	require_once ("composant/composant.php");

	$UtilisateurC = new AnimauxC();
	$error = "";
	
	if (
		isset($_POST["id_animaux"]) && 
		isset($_POST["sex"]) && 
        isset($_POST["typee"]) &&
        isset($_POST["age"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["categorie"]) &&
		isset($_POST["couleur"])  &&
		isset($_POST["image"])  &&
		isset($_POST["dated"])  &&
		isset($_POST["datef"])  &&

        isset($_POST["prix_promotions"])  
	){
		if (
			!empty($_POST["id_animaux"]) && 
			!empty($_POST["sex"]) && 
            !empty($_POST["typee"]) && 
            !empty($_POST["age"]) && 
            !empty($_POST["prix"]) &&
            !empty($_POST["categorie"]) &&
			!empty($_POST["couleur"]) &&
			!empty($_POST["image"]) &&
			!empty($_POST["dated"]) &&
			!empty($_POST["datef"]) &&
            !empty($_POST["prix_promotions"])

        ) {
            $user = new promoanimaux(
				$_POST['id_animaux'],
				$_POST['sex'],
                $_POST['typee'],
                $_POST['age'], 
                $_POST['prix'],
                $_POST['categorie'],
				$_POST['couleur'],
				$_POST['image'],
				$_POST['dated'],
				$_POST['datef'],
                $_POST['prix_promotions']

			);
			
            $UtilisateurC->ajouterpromoanimaux($user);
			header('Location:promoanimaux.php');

        }
        else
            $error = "Missing information";
	}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NATUREPET</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="css/scripts.js"></script>
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
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
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
                                                <a class="nav-link" href="reclamationAdm.php"> <em class="fa fa-book-open">&nbsp;</em>Afficher Reclamations</a>
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
    <div>  
        <div id="error">
            <?php echo $error; ?>
        </div>

    	<?php
			if (isset($_GET['id_animaux'])){
				$user = $UtilisateurC->recupereretat($_GET['id_animaux']);
				
		?>

 <form action="" method="POST">	
 <div class="row">
            <div class="col-md-0.5">
			</div>
			<br>
    <div class="container">

        <div class="row">
            <div class="col-md-1">
			</div>
			
            <div class="col-md-6">
                <div class="container text-center">
             <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="d-flex justify-content-center">
        	<br> <div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>ID Animaux :<td></div>
			<div class="pt-4">
				   <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                        </div>
                        <input type="text" name="id_animaux" id="id_animaux" value = "<?php echo $user['id_animaux']; ?>" class="form-control" readonly> 

                     </div>  
			    </div><br>
				
                <div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Sexe :<td></div>
                <div class="pt-4">
				   <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-book'></i></div>
                        </div>
                        <input type="text" name="sex" id="sex" value = "<?php echo $user['sex']; ?>" maxlength="20" readonly class="form-control" placeholder="Sex" readonly> 
                     </div>  
				   
                </div><br>
				 <div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Type :<td></div>
                <div class="pt-4">
                  
					   <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                        <input type="text"  name="typee" id="typee" value = "<?php echo $user['typee']; ?>" class="form-control"  readonly>
                     </div>  
				<div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Age :<td> </div>
						<div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                       <div> <input type="text" name="age" id="age"  class="form-control" value = "<?php echo $user['age']; ?>" readonly> </div>
                     </div>  
            
            <br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Prix :<td></div>
                    <div class="pt-4">
					   <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-location-arrow'></i></i></div>
                        </div>
                        <input type="text" name="prix" id="prix" value = "<?php echo $user['prix']; ?>" class="form-control" readonly>
                     </div>  
                    </div>
                </div>
				<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Categorie :<td></div>
                    <div class="pt-4">
					   <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-book'></i></i></div>
                        </div>
                        <input type="text" name="categorie" id="categorie" value = "<?php echo $user['categorie']; ?>"  class="form-control" readonly>

					 </div>  
                    </div>
                </div>
				<div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Couleur :<td> </div>
						<div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                       <div> <input type="text" name="couleur" id="couleur" value = "<?php echo $user['couleur']; ?>"  class="form-control" readonly >  </div>
                     </div> 
					 
           <br>
           <div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Image :<td> </div>
						<div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                       <div> <input type="text" name="image" id="image" value = "<?php echo $user['image']; ?>"   class="form-control" readonly >  </div>
                     </div> 
					 
           <br>
           <div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Date debut promotion: :<td> </div>
						<div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                       <div> <input type="date" name="dated" id="dated" value =""  class="form-control" required>  </div>
                     </div> 
					 
           <br>
           <div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Date fin promotion :<td> </div>
						<div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                       <div> <input type="date" name="datef" id="datef" value = "" class="form-control" required>  </div>
                     </div> 
					 
           <br>
           <div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Saisir Solde :<td> </div>
						<div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class='fas fa-table'></i></div>
                        </div>
                       <div> <input type="number" name="prix_promotions" id="prix_promotions" value = "" class="form-control" min="1" max="100" required><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p> </div>
                     </div> 
					 
        
        
		  
                <div class=" ">
						<button name="create" data-toggle="tooltip" data-placement="bottom" title="Envoyer" class="btn btn-success" id="btn-create" onclick="return verif();" ><i class='fas fa-plus'></i></button>

					    <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Actualiser'"); ?>
                       
                </div>

                

        </div>
 
 
 
 </form>
 <?php
		}
		?>

		  <br>
         <!-- Bootstrap table  -->
        

        


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
