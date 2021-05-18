<?php
include "../config.php";
require_once '../model/livraisons.php';
class LivraisonsC{
    public function ajouter_livraison($livraisons)
    {
        $sql="insert into livraisons(nom,tel,adresse,email,idCommande) values(:nom,:tel,:adresse,:email,:idCommande)";
        $db=config::getConnexion();
        try{
            $querry=$db->prepare($sql);
            $querry->execute([
                'nom'=>$livraisons->getnom(),
                'tel'=>$livraisons->gettel(),
                'adresse'=>$livraisons->getadresse(),
                'email'=>$livraisons->getemail(),
                'idCommande'=>$livraisons->getidcommande()
                
                ]);
                
          }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
          }
        
    }
    public function afficher_livraison(){
        $sql="select * from livraisons";
        $db=config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          }

    }
    public function afficherDem(){
        $sql="select * from livraisons where DemAnnulation = 'OUI' ";
        $db=config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          }

    }



    function supprimer_livraison($id){
        $sql="DELETE FROM Livraisons WHERE id_livraison= :id";
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
   
    function modifierLivraison($livraisons, $id){
       
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livraisons SET 
                    nom = :nom, 
                    tel = :tel,
                    adresse= :adresse,
                    email = :email,
                    DemAnnulation=:DemAnnulation,
                    idCommande=:idCommande,
                    id_livraison=:id
                    
                WHERE id_livraison = :id'
            );
           
            $query->execute([
                'nom' => $livraisons->getnom(),
                'tel' => $livraisons->gettel(),
                'adresse' => $livraisons->getadresse(),
                'email' => $livraisons->getemail(), 
                'idCommande' =>$livraisons->getidcommande(),            
                'DemAnnulation'=> "OUI",
                
                'id' => $id
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }



}