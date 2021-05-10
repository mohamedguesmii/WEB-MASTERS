<?PHP
	include "../controller/AnimauxC.php";

	$utilisateurC=new AnimauxC();
	
	if (isset($_POST["id_animaux"])){
		$utilisateurC->supprimerAnimaux($_POST["id_animaux"]);
		header('Location:afficheranimaux.php');
	}

?>
