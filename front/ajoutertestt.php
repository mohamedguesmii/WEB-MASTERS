<?php
 include_once 'model/participe.php';
 include_once "controller/evenementC.php";

$error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $evenementC = new evenementC();
 if (
    isset($_POST["id"]) && 
    isset($_POST["nbre_participant"]) 
){
    if (
        !empty($_POST["id"]) && 
        !empty($_POST["nbre_participant"]) 

    ) {
        $user = new participe(
            $_POST['id'],
            $_POST['nbre_participant']

        );
        
        $evenementC->ajouterparticipe($user);
        header('Location:evenement.php');

    }
    else
        $error = "Missing information";
}
 ?> 

 

