<?php
    include_once '../Model/utilisateur.php';
    include_once '../Controller/UtilisateurC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new UtilisateurC();
    if (
        isset($_POST["sex"]) && 
        isset($_POST["typee"]) &&
        isset($_POST["age"]) && 
        isset($_POST["prix"]) &&
		isset($_POST["categorie"]) &&
		isset($_POST["couleur"]) &&
		isset($_POST["image"]))
		
        
     {
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
				$_POST['image'],
				
                
            );
            $userC->ajouterUtilisateur($user);
            header('Location:afficheranimaux.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html>
<head>
	<meta charset="utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
</head>
    <body>
	 <center>
       
		</center>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
	<form name="f1" action="" method="POST">

<center>
		<table>
			<tr>
		<td> <label for="sex">Sexe </label> </td>
	<td> <select name="sex" id="sex">
	<option value="male">male</option>
	<option value="female">female</option>
	
	</select>
	</td>
	</tr>
					<tr>
		<td> <label for="typee">Race </label> </td>
	<td> <select name="typee" id="typee">
	<option value="chiwawa">chiwawa</option>
	<option value="berger allmend">berger allmend</option>
	<option value="labrador">labrador</option>
	<option value="huskey">huskey</option>
	<option value="siamois">siamois</option>
	<option value="ragdol">ragdol</option>
		<option value="Accenteur mouchet">Accenteur mouchet</option>
	
	</select>
	</td>
	</tr>
		<tr>
		<td><label>age</label></td>
		<td><input type="number" name="age" id="age" Min="1" Max="15" placeholder="Age" required /> </td>
		</tr>
		<tr>
		<td> <label> prix</label> </td>
	<td> <input type="number" name="prix" id="prix" min="10" placeholder="Prix" required ></td>
	</tr>
	
		<tr>
		<td> <label for="categorie">Categorie </label> </td>
	<td> <select name="categorie">
	<option value="chien">Chien</option>
	<option value="chat">Chat</option>
	<option value="oiseau">Oiseau</option>
	</select>
	</td>
	</tr>
	
		<tr>
		<td> <label for="couleur">Couleur </label> </td>
	<td> <select name="couleur" id="couleur">
	<option value="jaune">jaune</option>
	<option value="noir">noir</option>
	<option value="rouge">rouge</option>
	<option value="bleu">bleu</option>
	</select>
	</td>
	</tr>
		<tr>
		<td> <label> Image</label> </td>
	<td> <input type="file" name="image" id="image"  placeholder="image" required ></td>
	</tr>
		
	
		
		</table>
		</center>
		<center>
		<input type="submit" value="submit">
</center>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Nature</span>PET</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Chedi</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index1.php"><em class="fa fa-dashboard">&nbsp;</em>Ajouter Animaux</a></li>
			<li><a href="afficheranimaux.php"><em class="fa fa-calendar">&nbsp;</em>Afficher Animaux</a></li>
			

		<li><a href="ajouternourriture.php"><em class="fa fa-calendar">&nbsp;</em>Ajouter Nourriture</a></li>
		<li><a href="affichernourriture.php"><em class="fa fa-calendar">&nbsp;</em>Afficher Nourriture</a></li>
			
		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};

	</script>
	</form>
		
</body>
</html>