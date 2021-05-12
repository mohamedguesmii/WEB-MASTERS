<?php
include_once "../config.php";
require_once '../model/ligne.php';
class LigneC{
    public function ajouter_Ligne($Ligne)
    {  
        $sql="insert into lignecommandes(produit,idProduit,idCommande) values(:produit,:idProduit,:idcommande)";
        $db=config::getConnexion();
        
        try{
            $querry=$db->prepare($sql);
            $querry->execute([
                'produit'=>$Ligne->getproduit(),
                'idProduit'=>$Ligne->getidProduit(),
                'idcommande'=>$Ligne->getidCommandee()
                  
                ]);
                
          }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
          }
        
    }
    public function afficher_LigneCommande(){
        $sql="select * from lignecommandes";
        $db=config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          }

    }

    function supprimer_ligneCommande($id){
        $sql="DELETE FROM lignecommandes WHERE idLigne= :id";
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
    



}