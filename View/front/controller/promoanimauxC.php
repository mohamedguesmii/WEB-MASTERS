<?PHP
	include "config.php";
	require_once 'model/promoanimaux.php';

	class promoanimauxC {
		
		function ajouterpromoanimaux($promoanimaux){
			$sql="INSERT INTO promoanimaux (id_animaux,sex, typee, age, prix, categorie, couleur ,prix_promotions) 
			VALUES (:id_animaux,:sex,:typee,:age,:prix,:categorie,:couleur,:prix_promotions)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'id_animaux' => $promoanimaux->getid_animaux(),
					'sex' => $promoanimaux->getSex(),
					'typee' => $promoanimaux->getTypee(),
					'age' => $promoanimaux->getAge(),
					'prix' => $promoanimaux->getPrix(),
					'categorie' => $promoanimaux->getCategorie(),
					'couleur' => $promoanimaux->getCouleur(),
                    'prix_promotions' => $promoanimaux->getprix_promotions(),

					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherpromoanimaux(){
			
			$sql="SELECT * FROM promoanimaux";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerAnimaux($id_promoanimaux){
			$sql="DELETE FROM promoanimaux WHERE id_promoanimaux= :id_promoanimaux";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_promoanimaux',$id_promoanimaux);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierAnimaux($promoanimaux, $id_promoanimaux){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE promoanimaux SET 
						id_animaux = :id_animaux,
                        sex = :sex, 
						typee = :typee,
						age = :age,
						prix = :prix,
						categorie = :categorie,
						couleur = :couleur
                        prix_promotions = :prix_promotions,

					
					WHERE id_promoanimaux = :id_promoanimaux'
				);
				$query->execute([
                    'id_animaux' => $promoanimaux->getid_animaux(),
					'sex' => $promoanimaux->getsex(),
					'typee' => $promoanimaux->gettypee(),
					'age' => $promoanimaux->getage(),
					'prix' => $promoanimaux->getprix(),
					'categorie' => $promoanimaux->getcategorie(),
					'couleur' => $promoanimaux->getcouleur(),
					'image' => $promoanimaux->getimage(),
                    'prix_promotions' => $promoanimaux->getprix_promotions(),
	
					'id_promoanimaux' => $id_promoanimaux
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAnimaux($id_promoanimaux){
			$sql="SELECT * from promoanimaux where id_promoanimaux=$id_promoanimaux";
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
	}