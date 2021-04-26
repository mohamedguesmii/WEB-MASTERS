<?php
	include "config.php";
	require_once 'Model/evenement.php';


class evenementC {

	function recupereretat($id)
    {
        $sql="SELECT * from evenement where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    


    
    function afficherevenement()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='liés aux plante' OR categorie='liés aux animaux'";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }

    function supprimerevenement($evenement)
    {
        $sql="DELETE FROM evenement where id= :id ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id"]);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierevenement($evenement, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE evenement SET 
                    type = :type, 
                    description = :description, 
                    lieu = :lieu,
                    date = :date,
                    datef = :datef

                   
                WHERE id = :id'
            );
            $query->execute([
                'type' => $evenement->gettype(),
                'description' => $evenement->getdescription(),
                'lieu' => $evenement->getlieu(),
                'date' => $evenement->getdate(),
                'datef' => $evenement->getdatef(),

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function ajouterevenement($evenement){
        $sql="INSERT INTO evenement (type,description, lieu, date,datef) 
        VALUES (:type,:description,:lieu,:date,:datef)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'type' => $evenement->gettype(),
                'description' => $evenement->getdescription(),
                'lieu' => $evenement->getlieu(),
                'date' => $evenement->getdate(),
                'datef' => $evenement->getdatef(),

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}

	

?>