<?php
 include_once 'model/participe.php';
 include_once "controller/evenementC.php";

$error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $evenementC = new evenementC();
 if (
    isset($_POST["id"]) && 
    isset($_POST["nbre_participant"]) 
){
    if (
        !empty($_POST["id"]) && 
        !empty($_POST["nbre_participant"]) 

    ) {
        $user = new participe(
            $_POST['id'],
            $_POST['nbre_participant']

        );
        
        $evenementC->ajouterparticipe($user);
        header('Location:promoanimaux.php');

    }
    else
        $error = "Missing information";
}
 ?> 

 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <?php	
        if (isset($_GET['id'])){
		$user = $evenementC->recupereretat($_GET['id']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='4' ></td>
                    <td>
                        <label for="id">id
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id"  value="<?php echo $user['id']; ?>" readonly></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="nbre_participant">nbre participant:
                        </label>
                    </td>
                    <td><input type="number" name="nbre_participant" id="nbre_participant"   min="1" max="10"  required></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </body>
</html>