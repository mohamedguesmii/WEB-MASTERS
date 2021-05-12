<?PHP
	include "../controller/LigneC.php";

	$li=new LigneC();
	
	if (isset($_POST["idLigne"])){
		$li->supprimer_ligneCommande($_POST["idLigne"]);
		header('Location:afficherLigne.php');
	}

?>