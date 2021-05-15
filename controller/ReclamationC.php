<?PHP
include_once "../config.php";
require_once '../Model/Reclamation.php';
class ReclamationC {
		
		function ajouterReclamation($date_reclamation,$objet_reclamation,$description,$id_client){
			$sql="INSERT INTO Reclamation (date_reclamation,objet_reclamation,description,id_client)
			VALUES ('$date_reclamation','$objet_reclamation','$description','$id_client')";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute();
							
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifierReclamation($id_reclamation,$date_reclamation,$objet_reclamation,$description,$id){
			try {
				$db= config::getConnexion();
				$query = $db->prepare(
					"UPDATE Reclamation  SET
					Date_reclamation = '$date_reclamation',
					Objet_reclamation = '$objet_reclamation',
					Description = '$description',
					
					WHERE id_reclamation = '$id_reclamation'" 
				);
				$query->execute([
				
						'date_reclamation' => $Reclamation->getDate_reclamation(),
						'objet_reclamation' => $Reclamation->getlObjet_reclamation(),
						'description' => $Reclamation->getDescription(),
						
	
					'id_reclamation' => $id_reclamation
				]);
			 echo $query->rowCount() . "records UPDATER" ;
			} catch (PDOException $e) {
				 $e->getMessage();
		   }
	   }
		function afficherReclamation(){
			$sql="SELECT * FROM Reclamation ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}	
        }
		function afficherReclamation1($id){
			$sql="SELECT U.ID, R.id_reclamation, R.date_reclamation, R.objet_reclamation ,R.description FROM utilisateur U, reclamation R WHERE R.id_client = U.ID and U.ID =\"$id\"";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e)
			{
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
		function trierReclamation(){
			
			$sql="SELECT * FROM Reclamation ORDER BY date_reclamation DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
		function trieReclamation2(){
				
			$sql="SELECT * FROM Reclamation ORDER BY date_reclamation ASC";
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