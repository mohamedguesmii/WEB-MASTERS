<?php
include "../config.php";
require_once '../model/livraisons.php';
class LivraisonsC{
    public function ajouter_livraison($livraisons)
    {
        $sql="insert into livraisons(nom,tel,adresse) values(:nom,:tel,:adresse)";
        $db=config::getConnexion();
        try{
            $querry=$db->prepare($sql);
            $querry->execute([
                'nom'=>$livraisons->getnom(),
                'tel'=>$livraisons->gettel(),
                'adresse'=>$livraisons->getadresse()
                
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
    function modifier_livraison($id){
       
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livraisons SET 
                    DemAnnulation = :annulation,
                    id_livraison = :id
                   
                WHERE id_livraison = :id'
            );
          
            $query->execute([
                'annulation' => "OUI",
                'id'=>$id
               
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recuperer_livraisons($id){
        $sql="SELECT * from livraisons where id_livraison=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $livraisons=$query->fetch();
            return $livraisons;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}