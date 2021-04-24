<?php
	include "../Controller/UtilisateurC.php";
	include_once '../Model/utilisateur.php';

	$nourritureC = new NourritureC();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["prix"]) &&
        isset($_POST["categorie"]) &&
		isset($_POST["quantity"]) &&
		isset($_POST["image"]) 
     
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["categorie"])&&
             !empty($_POST["quantity"])&&
             !empty($_POST["image"])			 
        ) {
            $user = new Nourriture(
                $_POST['nom'],
                $_POST['prix'], 
                $_POST['categorie'],
				$_POST['quantity'],
				$_POST['image']
			);
			
            $nourritureC->modifierNourriture($user, $_GET['id']);
            header('refresh:5;url=affichernourriture.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Nourriture</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="affichernourriture.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $nourritureC->recupererNourriture($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						
					</td>
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
						<label for="nom">Nom:
						</label>
					</td>
					<td>
						<input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user['nom']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prix">Prix
                        </label>
                    </td>
                    <td><input type="number" name="prix" id="prix" maxlength="20" value = "<?php echo $user['prenom']; ?>"></td>
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
                        <label for="quantity">Quantity:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="quantity" id="quantity"  value = "<?php echo $user['quantity']; ?>">
                    </td>
                </tr>
				<tr>
                    <td>
                        <label for="image">Image:
                        </label>
                    </td>
                    <td>
                        <input type="file" name="image" id="image"  value = "<?php echo $user['image']; ?>">
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