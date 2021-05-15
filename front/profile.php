
<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php";
include '../controller/UtilisateurC.php';
$userC = new UtilisateurC();

$user=$_SESSION['prenom'] .' '. $_SESSION['nom'];
$id=$_SESSION['id'];
$prenom=$_SESSION['prenom'];
$nom=$_SESSION['nom'];
$role=$_SESSION['role'];
$email=$_SESSION['email'];
$adresse=$_SESSION['adresse'];
$login=$_SESSION['login'];
$date=$_SESSION['date'];
$telephone=$_SESSION['telephone'];

 if ( 
 isset($_POST['nom'])
&& isset($_POST['prenom'])
&& isset($_POST['role'])
 && isset($_POST['date_de_naissance'])
 && isset($_POST['email'])
 && isset($_POST['telephone'])
 && isset($_POST['adresse'])
 )
 {
if(!empty($_POST['nom'])
 &&!empty($_POST['prenom'])
 &&!empty($_POST['role'])
 &&!empty($_POST['date_de_naissance'])
 &&!empty($_POST['email'])
   &&!empty($_POST['telephone'])
  &&!empty($_POST['adresse'])
 )
  { 
  $nomUp=$_POST["nom"];
  $prenomUp=$_POST["prenom"];
  $roleUp=$_POST["role"];
  $dateUp=$_POST["date_de_naissance"];
  $emailUp=$_POST["email"];
  $telephoneUp=$_POST["telephone"];
  $adresseUP=$_POST["adresse"];
  
  $userC->modifierUtilisateur($id,$nomUp,$prenomUp,$dateUp,$emailUp,$telephoneUp,$adresseUp,$roleUp);
  header('Location:profile.php');
  
  $_SESSION['prenom'] = $prenomUp;
  $_SESSION['nom'] = $nomUp;
  $_SESSION['email'] = $emailUp;
  $_SESSION['telephone'] = $telephoneUp;
  $_SESSION['adresse'] = $adresseUP;
  $_SESSION['date'] = $dateUp;
  $_SESSION['role'] = $roleUp;
}
}
else{
  echo("");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | NATURE PET</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/home/4.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> NATUREPET@esprit.tn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="profile.php"><i class="fa fa-user">      <span class="profile-name"><?PHP echo $user; ?></i></a>
								
								    <a href="index.php"> Se déconnecter </a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
						
						</div>
				
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							
								
              <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="AjouterCommande.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
				
					
		<!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
              <li><a href="acceuil.php" >Home</a></li>
              <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="AjouterCommande.php">Cart</a></li> 
							
                                    </ul>
                                </li> 
								<li><a href="contact-us.html"  >Reclamations</a>
								<ul role="menu" class="sub-menu">
                                    
										<li><a href="ajouterReclamation.php">Ajouter reclamation</a></li> 
										<li><a href="afficherReclamation.html">Afficher reclamation</a></li> 
										
                                    </ul></li>
              <li class="dropdown"><a href="#">Evenement<i class="fa fa-angle-down"></i></a>
               <ul role="menu" class="sub-menu">
								<li><a href="evenement.php">Les Evenements Disponible</a></li>
								<li><a href="consulterevenement.php">Consulter Mes Evenements</a></li>
              </ul>
              
               <li><a href="contact-us.html" >Contact</a></li>

						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
     
           
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>NATURE</span>PET</h1>
									
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/plante1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/plantes2.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>NATURE</span>PET</h1>
									
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/4.jpg"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>NATURE</span>PET</h1>
	
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/an5.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/an7.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
     <div class="main-panel">
          <div style="height: 100%;overflow-y: scroll;overflow-x: hidden; ">
               <div class="col-12 grid-margin" style="margin-top: 10px">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="POST">
                      <p class="card-description">Informations personnelles</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prenom</label>
                            <div class="col-sm-9">
                              <input type="text" id="prenom" name="prenom" class="form-control" disabled value='<?PHP echo $prenom; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nom </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" disabled name="nom" value='<?PHP echo $nom; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ROLE</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" disabled name="role" value='<?PHP echo $role; ?>'  />
                               
                                
                                
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date de naissance</label>
                            <div class="col-sm-9">
                              <input class="form-control" disabled name="date_de_naissance" value='<?PHP echo $date; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name="email" class="form-control" value='<?PHP echo $email; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de Telephone</label>
                            <div class="col-sm-9">
                              <input type="text" name="telephone" class="form-control" value='<?PHP echo $telephone; ?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Adresse</label>
                            <div class="col-sm-9">
                              <input type="text" name="adresse" class="form-control" value='<?PHP echo $adresse; ?>' />
                            </div>
                          </div>
                        
                      </div>
                      <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Modifier </button>
              <button class="btn btn-light" type="reset">Annuler </button>
             </div>
                    </form>
                  </div>
                </div>
              </div>
          </div> 
         
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © NaturePet  2021</span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>