<?PHP
    include "../controller/PlanteC.php";
	require_once ("composant/composant.php");

	$PlantesC=new PlantesC();
	
	if (isset($_POST["id_promo"])){
		$PlantesC->supprimerpromoplante($_POST["id_promo"]);
		header('Location:promoplantes.php');
	}

?>

