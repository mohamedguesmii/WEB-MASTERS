<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php"; 
	include "../controller/UtilisateurC.php";
	
	
	  
	#$sql="select * from Utilisateur where (email='$email' );";
	//$res=mysqli_query($mysqli,$sql);
//	if (mysqli_num_rows($res) > 0) { 
	//  $row = mysqli_fetch_assoc($res);
	 // if($email==isset($row['email']))
	//  {
			//  echo "email already exists";
	 // }




	$userC = new UtilisateurC();
   $error = "";
   if (
    isset($_POST['nom'])
    && isset($_POST['prenom'])
    && isset($_POST['date_de_naissance'])
    && isset($_POST['email'])
    && isset($_POST['role'])
    && isset($_POST['telephone'])
    && isset($_POST['login'])
    && isset($_POST['password'])
    && isset($_POST['adresse'])
  ) {
      if(!empty($_POST['nom'])
      &&!empty($_POST['prenom'])
      &&!empty($_POST['date_de_naissance'])
      &&!empty($_POST['email'])
      &&!empty($_POST['role'])
      &&!empty($_POST['telephone'])
      &&!empty($_POST['login'])
      &&!empty($_POST['password'])
      &&!empty($_POST['adresse'])
      )
	  
      {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $date=$_POST["date_de_naissance"];
        $email=$_POST["email"];
        $role=$_POST["role"];
        $telephone=$_POST["telephone"];
        $login=$_POST["login"];
        $password=$_POST["password"];
        $adresse=$_POST["adresse"];
        $userC->ajouterUtilisateur($nom,$prenom,$date,$email,$role,$telephone,$login,$password,$adresse);
        header('location:Index.php');
      }else{
        $error="Missing information";
      }
    }
#}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | NATURE-PET</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="overflow:scroll;">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> NATUREPET@esprit.tn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
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
							<a href="index.html"><img src="images/home/logo.jpg" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							
							
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="index.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
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
							<li><a href="index.php" >Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="AjouterCommande.php">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
							
								<li><a href="evenement.php">Evenement</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
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
	<body style="overflow:hidden">
<div class="col-5" style="margin-left:10%;height:100%;margin-top:3%">
    <div class="card" style=" height:87%">
      <div class="card-body">
        <h2 class="card-title">Créer un compte</h2>
        <h5 style="color:red"></h5>
		<?php echo $error?>
        <form class="forms-sample" action="" method="POST" style="height:100%">
          <div style="height:85%;overflow-y:scroll">
            <div class="form-group">
              <label for="exampleInputName1">Nom</label>
              <input type="text" class="form-control" placeholder="Nom" name="nom"  required  />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Prenom</label>
              <input type="text" class="form-control" placeholder="Prenom" name="prenom" required />
            </div>
            
            <div class="form-group">
              <label for="exampleSelectGender">Role</label>
              <select class="form-control" name="role">
            
                
                <option>Client</option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date de naissance</label>
              <input type="date" class="form-control"  name="date_de_naissance" value="2018-07-22" min="1950-01-01" max="2021-12-31" required />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Email</label>
              <input type="email"  class="form-control" placeholder="azerty@gmail.com" name="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" required />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Numero de telephone</label>
              <input type="text" class="form-control" placeholder="12123123" name="telephone"  pattern="[0-9]{2}[0-9]{3}[0-9]{3}" required />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Login</label>
              <input type="text" class="form-control"  placeholder="Login" name="login"  minlength="4" maxlength="20" required/>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Mot de passe</label>
              <input type="password" class="form-control" placeholder="mot de passe" name="password"  minlength="6" maxlength="20" required />
            </div>


            <div class="form-group">
              <label for="exampleInputCity1">Adresse</label>
              <input type="text" class="form-control"  placeholder="adresse" name="adresse" required />
            </div>
            <div style="margin-top:2%;border-top:1px solid grey">
            </div>
          </div>
          <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Enregistrer </button>
              <button class="btn btn-light" type="reset">Annuler</button>
          </div>
        </form>
      </div>
    </div>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>NATURE</span>PET</h2>
							
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/an4.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/an3.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						
						
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/an1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>ARIANAp>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">ANIMAUX</a></li>
								<li><a href="">PLANTES</a></li>
								<li><a href="">NOURRITURE</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	</div>
</body>
</body>
</html>