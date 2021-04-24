<?php
	include "../Controller/UtilisateurC.php";
	include_once '../Model/utilisateur.php';

	$utilisateurC = new UtilisateurC();
	$error = "";
	
	if (
		isset($_POST["sex"]) && 
        isset($_POST["typee"]) &&
        isset($_POST["age"]) && 
        isset($_POST["prix"]) &&
		isset($_POST["categorie"]) &&
		isset($_POST["couleur"]) &&
		isset($_POST["image"])

        
	){
		if (
            !empty($_POST["sex"]) && 
            !empty($_POST["typee"]) && 
            !empty($_POST["age"]) && 
            !empty($_POST["prix"]) &&
            !empty($_POST["categorie"]) &&
             !empty($_POST["couleur"]) &&
              !empty($_POST["image"])			 
            
        ) {
            $user = new Utilisateur(
                $_POST['sex'],
                $_POST['typee'], 
                $_POST['age'],
                $_POST['prix'],
				$_POST['categorie'],
				$_POST['couleur'],
				$_POST['image']
                
			);
			
            $utilisateurC->modifierAnimaux($user, $_GET['id']);
            header('refresh:5;url=afficheranimaux.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Animaux</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficheranimaux.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $utilisateurC->recupererAnimaux($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="sex">Sexe:
						</label>
					</td>
					<td>
						<input type="text" name="sex" id="sex" maxlength="20" value = "<?php echo $user['sex']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label for="typee">Type::
						</label>
					</td>
					<td>
						<input type="text" name="typee" id="typee" maxlength="20" value = "<?php echo $user['typee']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prix">Prix:
                        </label>
                    </td>
                    <td><input type="number" name="prix" id="prix" maxlength="20" value = "<?php echo $user['prix']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="age">Age:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="age" id="age"  value = "<?php echo $user['age']; ?>">
                    </td>
                </tr>
				<tr>
		<td> <label for="categorie">categorie </label> </td>
	<td> <select name="categorie">
	<option value="chien">Chien</option>
	<option value="chat">Chat</option>
	<option value="oiseau">Oiseau</option>
	</select>
	</td>
	</tr>
                 
				
				<tr>
                    <td>
                        <label for="couleur">Couleur:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="couleur" id="couleur"  value = "<?php echo $user['couleur']; ?>">
                    </td>
                </tr>
				<tr>
                    <td>
                        <label for="image">Image
                        </label>
                    </td>
                    <td>
                        <input type="file" name="image" id="image"  value = "<?php echo $user['file']; ?>">
                    </td>
                </tr>
               
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>