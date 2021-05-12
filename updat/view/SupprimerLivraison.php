<?PHP
	include "../controller/LivraisonsC.php";

	$liv=new LivraisonsC();
	
	if (isset($_POST["id_livraison"])){
		$liv->supprimer_livraison($_POST["id_livraison"]);
		header('Location:TraiterDemLivraison.php');
	}

?>