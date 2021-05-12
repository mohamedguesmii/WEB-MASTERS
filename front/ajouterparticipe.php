<?php
 include_once '../model/participe.php';
 include_once "../controller/evenementC.php";

$error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $evenementC = new evenementC();
 if (
    isset($_POST["id"]) && 
    isset($_POST["id_client"]) &&
    !empty($_POST["id"]) && 
    !empty($_POST["id_client"]) && 
    ($_POST["id_client"]!=0) 

){
   
      
            $id=$_POST['id'];
           $id_client=$_POST['id_client'] ;


        
        
        $evenementC->ajouterparticipe($id,$id_client);
        header('Location:consulterevenement.php');

    
    
}
else     header('Location:login.php.php');

 ?> 

 

