<?php
include_once "../config.php";
require_once '../model/ligne.php';
class LigneC{
    public function ajouter_Ligne($Ligne)
    {  
        $sql="insert into lignecommandes(produit,idCommande) values(:produit,:idcommande)";
        $db=config::getConnexion();
        
        try{
            $querry=$db->prepare($sql);
            $querry->execute([
                'produit'=>$Ligne->getproduit(),
                'idcommande'=>$Ligne->getidCommandee()
                  
                ]);
                
          }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
          }
        
    }
    



}