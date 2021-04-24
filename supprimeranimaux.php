<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerAnimaux($_POST["id"]);
		header('Location:afficheranimaux.php');
	}

?>
