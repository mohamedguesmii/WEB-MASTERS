<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new NourritureC();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerNourriture($_POST["id"]);
		header('Location:affichernourriture.php');
	}

?>
