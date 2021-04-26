<?PHP
	include '../../config.php';
	require_once '../../Model/accessoires.php';


	class PlantesC {

        
		function addPlantes($plantes){
			$sql="INSERT INTO accessoires (categories, matiere, prix, image) 
			VALUES (:categories,:matiere,:prix,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'categories' => $plantes->getcategories(),
					'matiere' => $plantes->getmatiere(),
					'prix' => $plantes->getprix(),
					
					'image' => $plantes->getimage()
				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function displayPlantes(){
			
			$sql="SELECT * FROM accessoires";
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
			$sql="DELETE FROM accessoires WHERE id= :id";
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
					'UPDATE accessoires SET 
						categories = :categories, 
						matiere = :matiere,
						prix = :prix,
						
						image = :image
                       WHERE id = :id'
				);
				$query->execute([
					'categories' => $plantes->getcategories(),
					'matiere' => $plantes->getmatiere(),
					'prix' => $plantes->getprix(),
					
					'image' => $plantes->getimage(),
					'id' => $id
				]);
			
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recoverPlantesbyid($id){
			$sql="SELECT * from accessoires where id=:id";
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
	}

	
	
	
	
	
	
	
	
	
	

