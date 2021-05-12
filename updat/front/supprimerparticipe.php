<?PHP
 
	include "../controller/evenementC.php";

	$evenementC=new evenementC();
	
	if (isset($_POST["id_participe"])){
		$evenementC->supprimerparticipe($_POST["id_participe"]);
		header('Location:consulterevenement.php');
	}

?>