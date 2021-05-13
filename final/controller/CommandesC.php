<?php
include "../config.php";
require_once '../model/Commandes.php';
require_once '../model/ligne.php';
class CommandesC{
    public function ajouter_commande($Commandes)
    {  
        $sql="insert into commandes(idClient,paiment,montant) values(:client,:paiment,:montant)";
        $db=config::getConnexion();
        
        try{
            $querry=$db->prepare($sql);
            $querry->execute([
                'client'=>$Commandes->getclient(),
                'paiment'=>$Commandes->getpaiment(),
                'montant'=>$Commandes->getmontant()
            
               
                ]);
               
               
          }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
          }
        

    }
    public function afficher_Commande(){
        $sql="select * from commandes";
        $db=config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          }

    }


    function supprimer_Commande($id){
        $sql="DELETE FROM Commandes WHERE idCommande= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   

    public function afficherDem(){
        $sql="select * from Commandes where DemAnnulation = 'OUI' ";
        $db=config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          }

    }



    function modifierCommande($Commandes,$id){
       
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commandes SET    
                   
                    paiment = :paiment,
                    DemAnnulation=:DemAnnulation,
                    idCommande=:id
                    
                WHERE idCommande = :id'
            );
           
            $query->execute([
                
                'paiment' => $Commandes->getpaiment(),
                'DemAnnulation'=>"OUI",
                
                'id' => $id
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function trierCommandeD(){
			
        $sql="SELECT * FROM commandes ORDER BY Montant DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    public function trierCommandeA(){
			
        $sql="SELECT * FROM commandes ORDER BY Montant ASC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    


}