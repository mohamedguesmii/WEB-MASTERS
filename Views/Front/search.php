<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=plantes",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `plante` WHERE nom = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>nom</th>
				<th>longeur</th>
				<th>prix</th>
				<th>type</th>
				<th>image</th>
			</tr>
			<tr>
				<td><?php echo $row->nom; ?></td>
				<td><?php echo $row->longeur;?></td>
				<td><?php echo $row->prix;?></td>
				<td><?php echo $row->type;?></td>
				<td><?php echo $row->image;?></td>

			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>