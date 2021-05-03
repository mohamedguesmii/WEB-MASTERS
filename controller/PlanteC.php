<?PHP
	include_once '../config.php';
	require_once '../Model/Promoplante.php';

	require_once '../Model/Plante.php';

	class PlantesC {
		
		function recupereretat($id)
    {
        $sql="SELECT * from plante where id=$id";
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

		function addPlantes($plantes){
			$sql="INSERT INTO plante (nom, longeur, prix, type, image) 
			VALUES (:nom,:longeur,:prix,:type,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $plantes->getnom(),
					'longeur' => $plantes->getlongeur(),
					'prix' => $plantes->getprix(),
					'type' => $plantes->gettype(),
					'image' => $plantes->getimage()
				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function displayPlantes(){
			
			$sql="SELECT * FROM plante";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deletePlantes($id){
			$sql="DELETE FROM plante WHERE id= :id";
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
		function updatePlantes($plantes, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE plante SET 
						nom = :nom, 
						longeur = :longeur,
						prix = :prix,
						type = :type,
						image = :image
                       WHERE id = :id'
				);
				$query->execute([
					'nom' => $plantes->getnom(),
					'longeur' => $plantes->getlongeur(),
					'prix' => $plantes->getprix(),
					'type' => $plantes->gettype(),
					'image' => $plantes->getimage(),
					'id' => $id
				]);
			
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recoverPlantesbyid($id){
			$sql="SELECT * from plante where id=:id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute(['id'=>$id]);

				$plantes=$query->fetch();
				return $plantes;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function afficherpromoplante(){
			
			$sql="SELECT * FROM promoplante";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function ajouterpromoplante($promoplante){
			$sql="INSERT INTO promoplante (id, nom, longeur, prix, type, image ,dated ,datef,prix_promoplante) 
			VALUES (:id,:nom,:longeur,:prix,:type,:image,:dated,:datef,:prix_promoplante)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'id' => $promoplante->getId(),
					'nom' => $promoplante->getnom(),
					'longeur' => $promoplante->getlongeur(),
					'prix' => $promoplante->getprix(),
					'type' => $promoplante->gettype(),
					'image' => $promoplante->getimage(),
					'dated' => $promoplante->getdated(),
					'datef' => $promoplante->getdatef(),
                    'prix_promoplante' => $promoplante->getprix_promoplante(),

					
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

	function modifierpromoplante($promoplante, $id_promo){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE promoplante SET 
                    id = :id, 
                    nom = :nom, 
                    lieu = :lieu,
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
	 
	function recherchernom($nom){
		$sql="SELECT * From promoplante WHERE nom= '$nom' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	
	function recherchertype($type){
		$sql="SELECT * From promoplante WHERE type = '$type' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

	}
