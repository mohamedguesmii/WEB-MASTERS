<?PHP
	include "../controller/UtilisateurC.php";
	require_once ("composant/composant.php");

	$UtilisateurC=new UtilisateurC();
	
	if (isset($_POST["id_promoanimaux"])){
		$UtilisateurC->supprimeranimau($_POST["id_promoanimaux"]);
		header('Location:promoanimaux.php');
	}

?>

