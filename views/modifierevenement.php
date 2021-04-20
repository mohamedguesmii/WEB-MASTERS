<?php
	include "../controller/evenementC.php";
	include_once '../Model/evenement.php';

	$evenementC = new evenementC();
	$error = "";
	
	if (
		isset($_POST["description"]) && 
        isset($_POST["lieu"]) &&
        isset($_POST["date"]) 
	){
		if (
            !empty($_POST["description"]) && 
            !empty($_POST["lieu"]) && 
            !empty($_POST["date"])
        ) {
            $user = new evenement(
                $_POST['description'],
                $_POST['lieu'], 
                $_POST['date']
			);
			
            $evenementC->modifierevenement($user, $_GET['id']);
            header('refresh:5;url=afficherevenement.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier evenement</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherevenement.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $evenementC->recupereretat($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="description">description:
						</label>
					</td>
					<td>
						<input type="text" name="description" id="description" maxlength="20" value = "<?php echo $user['description']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="lieu">lieu:
                        </label>
                    </td>
                    <td><input type="text" name="lieu" id="lieu" maxlength="20" value = "<?php echo $user['lieu']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date" id="date"  value = "<?php echo $user['date']; ?>">
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
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