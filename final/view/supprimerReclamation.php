<?PHP
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php"; 
	include "../controller/ReclamationC.php";

	$ReclamationC=new ReclamationC();
	
	if (isset($_POST["id_reclamation"])){
		$ReclamationC->supprimerReclamation($_POST["id_reclamation"]);
		header('Location:reclamationAdm.php');
	}

?>