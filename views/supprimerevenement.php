<?PHP
	include "../controller/evenementC.php";

	$evenementC=new evenementC();
	
	if (isset($_POST["id"])){
		$evenementC->supprimerevenement($_POST["id"]);
		header('Location:afficherevenement.php');
	}

?>

