<?PHP
	include "../config.php";
	require_once '../Model/utilisateur.php';

	class UtilisateurC {
		
		function ajouterUtilisateur($Utilisateur){
			$sql="INSERT INTO animaux (sex, typee, age, prix, categorie, couleur, image) 
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
					'image' => $Utilisateur->getImage(),
					
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
	
		function supprimerAnimaux($id){
			$sql="DELETE FROM animaux WHERE id= :id";
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
		function modifierAnimaux($Utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE animaux SET 
						sex = :sex, 
						typee = :typee,
						age = :age,
						prix = :prix,
						categorie = :categorie,
						couleur = :couleur,
						image = :image
					
					WHERE id = :id'
				);
				$query->execute([
					'sex' => $Utilisateur->getSex(),
					'typee' => $Utilisateur->getTypee(),
					'age' => $Utilisateur->getAge(),
					'prix' => $Utilisateur->getPrix(),
					'categorie' => $Utilisateur->getCategorie(),
					'couleur' => $Utilisateur->getCouleur(),
					'image' => $Utilisateur->getImage(),
	
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAnimaux($id){
			$sql="SELECT * from animaux where id=$id";
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
		function trierAnimaux(){
			
			$sql="SELECT * FROM animaux ORDER BY prix DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
				function trierAnimauxASC(){
			
			$sql="SELECT * FROM animaux ORDER BY prix ASC";
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
	class NourritureC {
		
		function ajouterNourriture($Nourriture){
			$sql="INSERT INTO nourriture (nom, prix, categorie, quantity, image) 
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