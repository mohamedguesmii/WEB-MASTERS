<?PHP
include_once "../config.php";
require_once '../Model/Reclamation.php';
class ReclamationC {
		
		function ajouterReclamation($date_reclamation,$objet_reclamation,$description){
			$sql="INSERT INTO Reclamation (date_reclamation,objet_reclamation,description)
			VALUES ('$date_reclamation','$date_reclamation','$description')";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifierReclamation($id_reclamation,$date_reclamation,$objet_reclamation,$description){
			try {
				$db= config::getConnexion();
				$query = $db->prepare(
					"UPDATE Reclamation SET
					Date_reclamation = '$date_reclamation',
					Objet_reclamation = '$objet_reclamation',
					Description = '$description',
					
					WHERE ID = '$id_reclamation'"
				);
		   $query->execute();
			 echo $query->rowCount() . "records UPDATER" ;
			} catch (PDOException $e) {
				 $e->getMessage();
		   }
	   }
		function afficherReclamation(){
			$sql="SELECT * FROM Reclamation where id_reclamation='".$id_reclamation."';
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		

		function supprimerReclamation($id_reclamation){
			$sql="DELETE FROM Reclamation WHERE id_reclamation= :id_reclamation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reclamation',$id_reclamation);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	


?>