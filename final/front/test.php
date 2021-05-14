<?php
session_start();

include "../config.php"; 
	include "../controller/ReclamationC.php";
	include "../controller/UtilisateurC.php";
   $ReclamationC = new ReclamationC();
   $UtilisateurC=new UtilisateurC();

   $error = "";
   if (
    isset($_POST['date_reclamation'])
    && isset($_POST['objet_reclamation'])
    && isset($_POST['description'])
	&& isset($_POST['id_client'])
   
  ) {
      if(!empty($_POST['date_reclamation'])
      &&!empty($_POST['objet_reclamation'])
      &&!empty($_POST['description'])
	  &&!empty($_POST['id_client'])
      
      )
      {
		
        $date_reclamation=$_POST["date_reclamation"];
        $objet_reclamation=$_POST["objet_reclamation"];
        $description=$_POST["description"];
        $id_client=$_POST["id_client"];

        $ReclamationC->ajouterReclamation($date_reclamation,$objet_reclamation,$description,$id_client);
        header('location:afficherReclamation.php');
      }else{
        $error="Missing information";
      }
    }
	

?>