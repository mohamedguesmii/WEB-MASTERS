<?php
include "../config.php";
require_once '../model/Commandes.php';
class CommandesC{
    public function ajouter_commande($Commandes)
    {  
        $sql="insert into commandes(client,paiment,Montant,Produit) values(:client,:paiment,:montant,:produit)";
        $db=config::getConnexion();
        
        try{
            $querry=$db->prepare($sql);
            $querry->execute([
                'client'=>$Commandes->getclient(),
                'paiment'=>$Commandes->getpaiment(),
                'montant'=>$Commandes->getmontant(),
                'produit'=>$Commandes->getproduit()
               
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
                    client = :client,
                    paiment = :paiment,
                    DemAnnulation=:DemAnnulation,
                    idCommande=:id
                    
                WHERE idCommande = :id'
            );
           
            $query->execute([
                'client' => $Commandes->getclient(),
                'paiment' => $Commandes->getpaiment(),
                'DemAnnulation'=>"OUI",
                
                'id' => $id
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }



}