<?PHP
	include "../config.php";
	require_once '../Model/utilisateurN.php';

	class UtilisateurC {
		
		function ajouterUtilisateur($Utilisateur){
			$sql="INSERT INTO nourriture (nom, prix, dateexp) 
			VALUES (:nom,:prix,:dateexp)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prix' => $Utilisateur->getPrix(),
					'dateexp' => $Utilisateur->getDateexp(),
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherUtilisateurs(){
			
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
	}