<?php

include_once "../model/livraisons.php";
include "../controller/livraisonsC.php";
$suc=0;
$L1=null;
$error="";
if(isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['adresse'])) 
{if((!empty($_POST['nom'])) && (!empty($_POST['tel'])) && (!empty($_POST['adresse']))) {
    $nom=$_POST['nom'];
    $tel=$_POST['tel'];
    $adresse=$_POST['adresse'];


$L1 = new livraisons($nom,$tel,$adresse);
$LC = new livraisonsC();
$suc=1;  
}else echo" Veuillez remplir toutes les cases";
}
else
$error="Missing Information";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Livraison </title>
</head>
    <body>
<div id="error">
<?php echo $error;?>
</div>
<div>
<?php
if($suc==1)
$LC->ajouter_livraison($L1);
?>
</div>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <div>
           
<form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='16' colspan='4'>Information de Livraison</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td><input type="number" name="tel" id="tel" maxlength="8"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="adrsse">Adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse" id="adresse">
                    </td>
                </tr>
                <tr>
                   
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
</div>
    </body>
</html>