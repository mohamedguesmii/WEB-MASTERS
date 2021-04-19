<?php
  include_once "../model/livraisons.php";
  include '../controller/livraisonsC.php';

	$L = null;
    $succ=0;
	$error = "";
            if (isset($_POST['id'])){
            if ( !empty($_POST['id'])){
            $id = $_POST['id']; 
            $L=new livraisonsC();
            $succ=1;
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
        <title>Demande d'annulation de livraison</title>
</head>
<body>
		<button><a href="afficherLivraison.php">Retour à la liste</a></button>
        <hr>
       
        <div id="error">
        <?php echo $error; ?>
    </div>
    <div>
<?php
if($succ==1)
$L->modifier_livraison($id);
?>
</div>  
<div> 
<form action="" method="POST">
            <table border="1" align="center">
                <tr>
                   <td> <label for="id_livraion">ID: </label></td>
                   <td>
                        <input type="number" name="id" id="id">
                   </td>
                </tr>
                    <td>
                        <input type="submit" value="Annuler Livraison" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Retour" >
                    </td>
                </tr>
            </table>
        </form>
</div>	
</body>
</html>
