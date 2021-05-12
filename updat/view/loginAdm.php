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
				header('location:index.php');
			}
	   }
   }	
?>
<!DOCTYPE html>
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