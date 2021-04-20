<?php
	include "../config.php";
	require_once '../Model/evenement.php';


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
        $sql="SElECT * From evenement";
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
                    description = :description, 
                    lieu = :lieu,
                    date = :date
                   
                WHERE id = :id'
            );
            $query->execute([
                'description' => $evenement->getdescription(),
                'lieu' => $evenement->getlieu(),
                'date' => $evenement->getdate(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function ajouterevenement($evenement){
        $sql="INSERT INTO evenement (description, lieu, date) 
        VALUES (:description,:lieu,:date)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'description' => $evenement->getdescription(),
                'lieu' => $evenement->getlieu(),
                'date' => $evenement->getdate(),
                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}

	

?>