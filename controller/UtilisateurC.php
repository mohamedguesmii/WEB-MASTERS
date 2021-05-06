<?PHP
	include_once "../config.php";
	require_once '../model/promoanimaux.php';
	require_once '../model/utilisateur.php';

	class UtilisateurC {

		function recupereretat($id_animaux)
    {
        $sql="SELECT * from animaux where id_animaux=$id_animaux";
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

		
		function ajouterUtilisateur($Utilisateur){
			$sql="INSERT INTO animaux (sex, typee, age, prix, categorie, couleur,image) 
			VALUES (:sex,:typee,:age,:prix,:categorie,:couleur,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'sex' => $Utilisateur->getSex(),
					'typee' => $Utilisateur->getTypee(),
					'age' => $Utilisateur->getAge(),
					'prix' => $Utilisateur->getPrix(),
					'categorie' => $Utilisateur->getCategorie(),
					'couleur' => $Utilisateur->getCouleur(),
					'image' => $Utilisateur->getimage(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM animaux";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerAnimaux($id_animaux){
			$sql="DELETE FROM animaux WHERE id_animaux= :id_animaux";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_animaux',$id_animaux);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierAnimaux($Utilisateur, $id_animaux){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE animaux SET 
						sex = :sex, 
						typee = :typee,
						age = :age,
						prix = :prix,
						categorie = :categorie,
						couleur = :couleur
						image = :image
					
					WHERE id_animaux = :id_animaux'
				);
				$query->execute([
					'sex' => $Utilisateur->getSex(),
					'typee' => $Utilisateur->getTypee(),
					'age' => $Utilisateur->getAge(),
					'prix' => $Utilisateur->getPrix(),
					'categorie' => $Utilisateur->getCategorie(),
					'couleur' => $Utilisateur->getCouleur(),
					'image' => $Utilisateur->getimage(),

	
					'id_animaux' => $id_animaux
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recupererAnimaux($id_animaux){
			$sql="SELECT * from animaux where id_animaux=$id_animaux";
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
		
		function ajouterpromoanimaux($promoanimaux){
			$sql="INSERT INTO promoanimaux (id_animaux,sex, typee, age, prix, categorie, couleur,image,dated,datef ,prix_promotions) 
			VALUES (:id_animaux,:sex,:typee,:age,:prix,:categorie,:couleur,:image,:dated,:datef,:prix_promotions)";
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
					'image' => $promoanimaux->getimage(),
					'dated' => $promoanimaux->getdated(),
					'datef' => $promoanimaux->getdatef(),
                    'prix_promotions' => $promoanimaux->getprix_promotions(),

					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function supprimeranimau($id_promoanimaux){
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

		function modifieranimau($promoanimaux, $id_promoanimaux){
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
						couleur = :couleur,
						image = :image
                        prix_promotions = :prix_promotions,

					
					WHERE id_promoanimaux = :id_promoanimaux'
				);
				$query->execute([
                    'id_animaux' => $promoanimaux->getid_animaux(),
					'sex' => $promoanimaux->getSex(),
					'typee' => $promoanimaux->getTypee(),
					'age' => $promoanimaux->getAge(),
					'prix' => $promoanimaux->getPrix(),
					'categorie' => $promoanimaux->getCategorie(),
					'couleur' => $promoanimaux->getCouleur(),
                    'prix_promotions' => $promoanimaux->getprix_promotions(),
	
					'id_promoanimaux' => $id_promoanimaux
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupereranimau($id_promoanimaux){
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
		function recherchersex($sex){
			$sql="SELECT * From promoanimaux WHERE sex= '$sex' ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function recherchercategorie($categorie){
			$sql="SELECT * From promoanimaux WHERE categorie = '$categorie' ";
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

	class NourritureC {
		
		function ajouterNourriture($Nourriture){
			$sql="INSERT INTO nourriture (nom, prix, categorie, quantity ,image) 
			VALUES (:nom,:prix,:categorie,:quantity,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $Nourriture->getNom(),
					'prix' => $Nourriture->getPrix(),
					'categorie' => $Nourriture->getCategorie(),
					'quantity' => $Nourriture->getQuantity(),
					'image' => $Nourriture->getImage(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherNourriture(){
			
			$sql="SELECT * FROM nourriture";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerNourriture($id){
			$sql="DELETE FROM nourriture WHERE id= :id";
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
				function modifierNourriture($Utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE nourriture SET 
						nom = :nom, 
						prix = :prix,
						categorie = :categorie,
						quantity =:quantity,
						image =:image
					
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prix' => $Utilisateur->getPrix(),
					'categorie' => $Utilisateur->getCategorie(),
					'quantity' => $Utilisateur->getQuantity(),
					'image' => $Utilisateur->getImage(),
	
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererNourriture($id){
			$sql="SELECT * from nourriture where id=$id";
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
		function trierNourriture(){
			
			$sql="SELECT * FROM nourriture ORDER BY prix DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
			function trierNourritureASC(){
			
			$sql="SELECT * FROM nourriture ORDER BY prix ASC";
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
?>