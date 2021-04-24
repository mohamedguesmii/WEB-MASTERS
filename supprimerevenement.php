<?PHP
	include "controller/evenementC.php";
	require_once ("composant/composant.php");

	$evenementC=new evenementC();
	
	if (isset($_POST["id"])){
		$evenementC->supprimerevenement($_POST["id"]);
		header('Location:evenement.php');
	}

?>

