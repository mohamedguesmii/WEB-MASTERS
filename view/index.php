<?PHP
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php"; 
 include '../controller/UtilisateurC.php';
 $messageupdate="";
 $message="";
 $errorMsg="";
 if(isset($_SESSION['message'])){
  $messageupdate=$_SESSION['message'];
  }
 $userC = new UtilisateurC;
 if ((isset($_POST["login"]) &&
	 isset($_POST["password"])) || 
	  (!empty($_POST["login"]) &&
     !empty($_POST["password"])))
	{
	   $message=$userC->login($_POST["login"] , $_POST["password"]);
	   if($message=="Incorrect"){
		    $errorMsg="Le pseudo ou le mot de passe est incorrect";
	   }else{
			$role=$message['Role'];
			$_SESSION['prenom'] = $message['Prenom'];
			$_SESSION['nom'] = $message['Nom'];
			$_SESSION['email'] = $message['Email'];
			$_SESSION['role'] = $message['Role'];
			$_SESSION['telephone'] = $message['Telephone'];
			$_SESSION['adresse'] = $message['Adresse'];
			$_SESSION['id'] = $message['ID'];
			$_SESSION['login'] = $message['Login'];
			$_SESSION['date'] = $message['Date_de_naissance'];
			if($role == "Admin"){
				header('location:bienvenu.php');
			}
	   }
   }	
?>
<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
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
                                                        <a class="nav-link" href="comptes.php"> <em class="fas fa-user-alt">&nbsp;</em>Afficher les comptes</a>
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
		
         <!-- Bootstrap table  -->
         

        

=======
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>NaturePet</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body class="align">
>>>>>>> d621535b94b93d125300d6e7b48fbf520a20873e

<div class="grid">
  <form action="" method="POST" class="form login" id="login-box">
    <div class="form__field">
      <label for="login__username"  style="height:50px">
        <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg>
        <span class="hidden">Login</span></label>
      <input id="login__username" type="text" name="login" class="form__input" placeholder="Login" style="height:50px">
    </div>
    <div style="color:red;padding-left: 5%;" id="error-login"></div>
    <div class="form__field">
      <label for="login__password"  style="height:50px">
        <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg>
        <span class="hidden">Mot de passe</span></label>
      <input id="login__password" type="password" name="password" class="form__input" placeholder="Mot de passe"  style="height:50px">
    </div>
    <div style="color:red;padding-left: 5%;" id="error-password"></div>
    <div class="form__field">
      <input type="button" value="Se connecter" onclick="submitForm()" style="background-color: #198ae3;color: var(--loginSubmitColor);font-weight: 700;text-transform: uppercase;border-radius: var(--loginBorderRadus);padding: 1rem;width: 100%;cursor: pointer;">
    </div>
  </form>
<div style="color:red"><?PHP echo $errorMsg; ?></div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>
<script>
function submitForm() {
  var login=document.getElementById('login__username').value;
  var password=document.getElementById('login__password').value;
  if(!login){
    document.getElementById("error-password").innerHTML = "";
    document.getElementById("error-login").innerHTML = "Le nom d'utilisateur est obligatoire";
  }else if(!password){
    document.getElementById("error-login").innerHTML = "";
    document.getElementById("error-password").innerHTML = "le mot de passe est obligatoire";
  }else{
    document.getElementById('login-box').submit();
  }
}
</script>
</body>
</html>
