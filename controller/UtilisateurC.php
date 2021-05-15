<?PHP
	include_once "../config.php";
	require_once '../model/Utilisateur.php';

	class UtilisateurC {
		
		function ajouterUtilisateur($nom,$prenom,$date,$email,$role,$telephone,$login,$password,$adresse){
			$sql="INSERT INTO Utilisateur (Nom, Prenom, Date_de_naissance,Email, Adresse, Telephone, Login, Password, Role, Active)
			VALUES ('$nom','$prenom','$date','$email','$adresse','$telephone','$login','$password','$role',0)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifierUtilisateur($id,$nom,$prenom,$date,$email,$telephone,$adresse,$role){
			try {
				$db= config::getConnexion();
				$query = $db->prepare(
					"UPDATE Utilisateur SET
					Nom = '$nom',
					Prenom = '$prenom',
					Email = '$email',
					Adresse = '$adresse',
					Role = '$role',
					Date_de_naissance = '$date',
					Telephone = '$telephone'
					WHERE ID = '$id'"
				);
		   $query->execute();
			 echo $query->rowCount() . "records UPDATER" ;
			} catch (PDOException $e) {
				 $e->getMessage();
		   }
	   }
		function afficherUtilisateurs(){
			$sql="SELECT * FROM Utilisateur where Active =1";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function afficherNotActiveUtilisateurs(){
			$sql="SELECT * FROM Utilisateur where Active =0";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerUtilisateur($id){
			$sql="DELETE FROM Utilisateur WHERE ID= :id";
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

		function validerUtilisateur($id,$email,$name){
			$sql="UPDATE Utilisateur SET ACTIVE = 1 WHERE ID= :id";
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

function login($email,$password){
	$sql = "SELECT * FROM `Utilisateur` WHERE Login='$email' and Password = '$password' and ACTIVE = '1'";
	 $db= config::getConnexion();
     try{
        $query=$db->prepare($sql);
        $query->execute();
		$count=$query->rowCount();

		if($count==0) {
			  $message = "Incorrect";
			  return $message;
        }else {
			  $x=$query->fetch();
			  return $x;
      	}
       	}
            catch (Exception $e){
			   $message=" ".$e->getMessage();
			   return  $message;
       	}
      }

	  function checkmail($email){
		$sql = "SELECT * FROM `Utilisateur` WHERE Email='$email'";
		 $db= config::getConnexion();
		 try{
			$query=$db->prepare($sql);
			$query->execute();
			$count=$query->rowCount();
	
			if($count==0) {
				  $message = "Incorrect";
				  return $message;
			}else {
				  $x=$query->fetch();
				  return $x["ID"];
			  }
			   }
				catch (Exception $e){
				   $message=" ".$e->getMessage();
				   return  $message;
			   }
	   }

	   function updatePassword($id,$password){
			$sql="UPDATE Utilisateur set Password='$password' where ID='$id' ";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		
		function getUserByPrenom($Prenom) {
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'SELECT * FROM Utilisateur WHERE  Prenom= :Prenom'
				);
				$query->execute([
				
					'Prenom' => $Prenom 
				]);
				return $query->fetch();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		  }
		}
?>