<?php
	include_once "../config.php";
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

    function afficherevenement1()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 0,1";
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

    function afficherevenement2()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 1,1";
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

    function afficherevenement3()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 2,1";
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
    function afficherevenement4()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 0,1";
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
    function afficherevenement5()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 1,1";
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

    function afficherevenement6()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 2,2";
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
                    categorie = :categorie,
                    date = :date,
                    datef = :datef,
                    image = :image
                   

                   
                WHERE id = :id'
            );
            $query->execute([
                'type' => $evenement->gettype(),
                'description' => $evenement->getdescription(),
                'lieu' => $evenement->getlieu(),
                'categorie' => $evenement->getcategorie(),
                'date' => $evenement->getdate(),
                'datef' => $evenement->getdatef(),
                'image' => $evenement->getimage(),

               

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function ajouterevenement($evenement){
        $sql="INSERT INTO evenement (type,description, lieu,categorie, date,datef,image) 
        VALUES (:type,:description,:lieu,:categorie,:date,:datef,:image)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'type' => $evenement->gettype(),
                'description' => $evenement->getdescription(),
                'lieu' => $evenement->getlieu(),
                'categorie' => $evenement->getcategorie(),
                'date' => $evenement->getdate(),
                'datef' => $evenement->getdatef(),
                'image' => $evenement->getimage()



                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    
    function trierevenement(){
			
        $sql="SELECT * FROM evenement ORDER BY date DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function trierevenement2(){
			
        $sql="SELECT * FROM evenement ORDER BY date ASC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function ajouterparticipe($id,$id_client){
        $sql="INSERT INTO participe (id,id_client) 
        VALUES (:id,:id_client)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'id' => $id ,
                'id_client' => $id_client

                
                

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function affichertuto($nom){
        $sql="SELECT E.type, E.description, E.categorie ,U.nom ,U.prenom,E.image ,P.id_participe FROM evenement E, utilisateur U, participe P WHERE E.id = P.id AND P.id_client = U.ID and u.Nom=\"$nom\"";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function supprimerparticipe($participe)
    {
        $sql="DELETE FROM participe where id_participe= :id_participe ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id_participe',$_POST["id_participe"]);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}

	

?>