<?PHP
	include "../controller/CommandesC.php";

	$com=new CommandesC();
	
	if (isset($_POST["idCommande"])){
		$com->supprimer_Commande($_POST["idCommande"]);
		header('Location:TraiterCommande.php');
	}

?>