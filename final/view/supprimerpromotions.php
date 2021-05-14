<?PHP
	include "../controller/AnimauxC.php";
	require_once ("composant/composant.php");

	$UtilisateurC=new AnimauxC();
	
	if (isset($_POST["id_promoanimaux"])){
		$UtilisateurC->supprimeranimau($_POST["id_promoanimaux"]);
		header('Location:promoanimaux.php');
	}

?>

