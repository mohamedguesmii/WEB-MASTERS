<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_POST["id_animaux"])){
		$utilisateurC->supprimerAnimaux($_POST["id_animaux"]);
		header('Location:afficheranimaux.php');
	}

?>
