<?PHP
	include_once 'config.php';
	require_once 'Model/Promoplante.php';

	class PlantesC {
		
		function recupereretat2($id_promo)
    {
        $sql="SELECT * from promoplante where id_promo=$id_promo";
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

    function ajouterpromoplante($promoplante){
        $sql="INSERT INTO promoplante (id, nom, longeur, prix, type, image ,prix_promoplante) 
			VALUES (:id,:nom,:longeur,:prix,:type,:image,:prix_promoplante)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'id' => $promoanimaux->getId(),
                'nom' => $promoanimaux->getnom(),
                'longeur' => $promoanimaux->getlongeur(),
                'prix' => $promoanimaux->getprix(),
                'type' => $promoanimaux->gettype(),
                'image' => $promoanimaux->getimage(),
                'prix_promoplante' => $promoanimaux->getprix_promoplante(),

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function supprimerpromoplante($id_promo){
        $sql="DELETE FROM promoplante WHERE id_promo= :id_promo";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_promo',$id_promo);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierpromoplante($promoplante, $id_promo){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE promoplante SET 
                    id = :id, 
                    nom = :nom, 
                    longeur = :longeur,
                    prix = :prix,
					type = :type,
                    image = :image,
					prix_promoplante = :prix_promoplante


                   
                WHERE id_promo = :id_promo'
            );
            $query->execute([
                'id' => $promoplante->getId(),
					'nom' => $promoplante->getnom(),
					'longeur' => $promoplante->getlongeur(),
					'prix' => $promoplante->getprix(),
					'type' => $promoplante->gettype(),
					'image' => $promoplante->getimage(),
                    'prix_promoplante' => $promoplante->getprix_promoplante(),

                'id_promo' => $id_promo
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";


        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

		
	}
