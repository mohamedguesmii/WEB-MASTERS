<?PHP
	include "../controller/evenementC.php";

	$utilisateurC=new evenementC();
	$listeUsers=$utilisateurC->afficherevenement();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Les evenement </title>
    </head>
    <body>
		<button><a href="ajouterevenement.php">Ajouter evenement</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>id</th>
				<th>descripton</th>
				<th>lieu</th>
				<th>date</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['description']; ?></td>
					<td><?PHP echo $user['lieu']; ?></td>
					<td><?PHP echo $user['date']; ?></td>
					
					<td>
						<form method="POST" action="supprimerevenement.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierevenement.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
