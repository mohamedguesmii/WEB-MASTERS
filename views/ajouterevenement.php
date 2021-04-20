<?php
    include_once '../model/evenement.php';
    include_once '../controller/evenementC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new evenementC();
    if (
        isset($_POST["description"]) && 
        isset($_POST["lieu"]) && 
        isset($_POST["date"])
    ) {
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
            $userC->ajouterevenement($user);
            header('Location:afficherevenement.php');
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
        <button><a href="erevenement.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>ajouter evenement</td>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id="description" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lieu">lieu:
                        </label>
                    </td>
                    <td><input type="text" name="lieu" id="lieu" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date" id="date">
                    </td>
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
    </body>
</html>