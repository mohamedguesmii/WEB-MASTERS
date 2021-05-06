<?PHP
	include "../controller/UtilisateurC.php";
	require_once ("composant/composant.php");

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

	$list=$utilisateurC->afficherpromoanimaux();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
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
	<script src="scriptee.js"></script>

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
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Moetaz</div>
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
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu1" aria-controls="submenu1"><i class="fas fa-calendar-check"></i>&nbsp;Gestion Evenement</a>
                                            <div id="submenu1" class="collapse submenu" style="">
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
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu2" aria-controls="submenu2"> <em class="fas fa-percentage">&nbsp;</em>Gestion Promotions</a>
                                            <div id="submenu2" class="collapse submenu" style="">
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
               
               <tr>
               <h2>Liste Des Animaux </h2>
               </tr>
                    <tr >
                        <td><b>ID animaux </b> </td>
						<td><b>Sex</b> </td>
                        <td><b>type</b></td>
                        <td><b>age</b></td>
						<td><b>Prix</b></td>
						<td><b>Categorie</b></td>
                        <td><b>Couleur</b></td>
						<td><b>image</b></td>
                        <td><b>Ajouter Promotions</b></td>
						

						
                    </tr>
                
                
				<?PHP
				foreach($listeUsers as $user){
			?>
           
				<tr>
					<td><?PHP echo $user['id_animaux']; ?></td>
					<td><?PHP echo $user['sex']; ?></td>
					<td><?PHP echo $user['typee']; ?></td>
					<td><?PHP echo $user['age']; ?></td>
					<td><?PHP echo $user['prix']; ?></td>
					<td><?PHP echo $user['categorie']; ?></td>
                 	<td><?PHP echo $user['couleur']; ?></td>
					<td><img src="images/<?= $user['image'] ?>" width = "50" height = "50"></td>


					
					<td>
						<a href="ajouterpromotions.php?id_animaux=<?PHP echo $user['id_animaux']; ?>"> <img src="https://img.icons8.com/fluent/48/000000/add-property.png"/> </a>
						
					</td>
					
				</tr>
			<?PHP
				}
			?>


              
            </table>
            
        </div>
        <div >
            <table class="table table-striped table-dark">
               
               <tr>
               <h2>Liste Des Animaux avec Promotions</h2>
               </tr>
                    <tr >
					   
					   <td><b>ID Promotions </b> </td>
                        <td><b>ID animaux </b> </td>
						<td><b>Sex</b> </td>
            			<td><b>type</b></td>
                    	<td><b>age</b></td>
						<td><b>Prix</b></td>
						<td><b>Categorie</b></td>
                    	<td><b>Couleur</b></td>
						<td><b>image</b></td>
						<td><b>date debut promotions</b></td>
						<td><b>date fin promotions</b></td>
						<td><b>Solde</b></td>
                       <td><b>Prix apres Reduction</b></td>
						<td><b>Modifier</b></td>
						<td><b>Supprimer</b></td>
                    </tr>
                
                
				<?PHP
				foreach($list as $usr){
					$prix = $usr['prix'];
					$prixr= $usr['prix_promotions'];
					$p= $prix *$prixr* 0.01;
					$pe = $prix - $p;
			?>
           
				<tr>
                    <td><?PHP echo $usr['id_promoanimaux']; ?></td>
					<td><?PHP echo $usr['id_animaux']; ?></td>
					<td><?PHP echo $usr['sex']; ?></td>
					<td><?PHP echo $usr['typee']; ?></td>
					<td><?PHP echo $usr['age']; ?></td>
					<td><?PHP echo $usr['prix']; ?></td>
					<td><?PHP echo $usr['categorie']; ?></td>
                    <td><?PHP echo $usr['couleur']; ?></td>
					<td><img src="images/<?= $usr['image'] ?>" width = "50" height = "50"></td>
					<td><?PHP echo $usr['dated']; ?></td>
                    <td><?PHP echo $usr['datef']; ?></td>
					<td><?PHP echo $usr['prix_promotions']; ?>%</td>
					<td><?PHP echo $pe ?></td>

					<td>
						<a href="modifierpromoanimaux.php?id_promoanimaux=<?PHP echo $usr['id_promoanimaux']; ?>"> <img src="https://img.icons8.com/fluent/48/000000/edit-file.png"/> </a>
						
					</td>
					<td>
						<form method="POST" action="supprimerpromotions.php">
						<button type="submit" style="background-color:transparent; border-color:transparent;"> 
						<img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>
                         </button>	
						<input type="hidden" value=<?PHP echo $usr['id_promoanimaux']; ?> name="id_promoanimaux">
						</form>
					</td>	
				</tr>
			<?PHP
				}
			?>

              
            </table>
            
        </div>

        <form method="POST" action="recherche2.php">
	<select  placeholder="sujet" name="choix" id="choix" >
              <option>Select</option>
			  <option>categorie</option>
              <option>sex</option>
              </select>
    <input type="text"  name="Search" name="Search"  placeholder="Search" >
	
     <input type="submit" class="btn btn-outline-primary" onclick="return verif3();"></i>
      </form>	

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