<?PHP
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php"; 
session_start();
 // session_start();
 include '../controller/UtilisateurC.php';
 $message="";
 $userC = new UtilisateurC;
 if ((isset($_POST["login"]) &&
	 isset($_POST["password"])) || 
	  (!empty($_POST["login"]) &&
     !empty($_POST["password"])))
	{
	   $message=$userC->login($_POST["login"] , $_POST["password"]);

	   if($message=="Incorrect"){
		    $msg="Le pseudo ou le mot de passe est incorrect";
			echo "<script>alert('message: " . $msg. "' );</script>";
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
			$_SESSION['cin'] = $message['Cin'];
			$_SESSION['date'] = $message['Date_de_naissance'];
			if($role == "Admin"){
				header('location:AcceuilAdm.php');
			}else{
				header('location:Acceuil.php');
			}
	   }
   }else{
	$message="missing information";
	echo "<script>alert($message);</script>";
   };	
?>
