<?php
include_once "manage_cart.php";

						include_once "../model/Commandes.php";
						include "../controller/CommandesC.php";
						include_once "../model/Ligne.php";
						include "../controller/LigneC.php";
						
						if (isset($_SESSION['id']) && ! empty($_SESSION['id']) && isset($_SESSION['prenom']) && ! empty($_SESSION['prenom']) &&  isset($_SESSION['nom']) && ! empty($_SESSION['nom']))
						{
							$id=$_SESSION['id'];
							$user=$_SESSION['prenom'] .' '. $_SESSION['nom'];
							$message="Se Deconnecter";
					
					
						}
						else{
						$user="";
						$message="Se Connecter";
						 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | NATURE-PET</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> NATUREPET@esprit.tn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								
								<li><a href="profile.php"><i class="fa fa-user">      <span class="profile-name"><?PHP echo $user; ?></i></a>
								
								    <a href="deconnexion.php"> <?PHP echo $message; ?> </a>
							    </li>
								
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php">
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									TUN
									<span class="caret"></span>
								</button>
								
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Dinar Tunisien
									<span class="caret"></span>
								</button>
								
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								
							
								<li><a href="ajouterCommande.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                
										<li><a href="cart.php" class="active">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								
                                      
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

    <section id="cart_items">
		<div class="container">
        
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="ModifierCommande.php">Modifier Commande</a></li>
				</ol>
			        </div>
                    <div class="col-lg-12 text-center border rounded bg-light my-5" >
                     <h1>MY CART</h1>
                    </div>
                

                   <div class="col-lg-8">
                    <table class="table table-striped">
                        <thead>
                     <tr>
                     <th scope="col">Serial No</th>
                     <th scope="col">Item Name</th>
					 <th scope="col">Item ID</th>
                     <th scope="col">Item Price</th>
                     <th scope="col">Quantity</th>
					 <th scope="col">Montant</th>
                     <th scope="col"></th>
                    </tr>
                    
                     </thead>
                         <tbody>
                             
                         <?php
                        $total=0;
						$produit="";
						$idP="";

                        if(isset($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart']as $key => $value)
                        {
                            $sr=$key+1;
                            $prod = $value['Item_Name']. " * $value[Quantity] ";
							$produit=$produit."+ ".$prod;
							$idP=$idP.$value['Item_id'];
							

							$total=$total+($value['Price']*$value['Quantity']);
                            echo"
                            <tr>
                            <td>$sr</td>
                            <td>$value[Item_Name]</td>
							<td>$value[Item_id]</td>
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]' </td>
                            <td>
							 <form action='manage_cart.php' method='POST'>
							  <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
							  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
							  </form>
							  </td>
                            <td class='itotal'></td>
							<td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-default add-to-cart'>REMOVE</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                            </td>
                            </tr>
                            ";   

                        }
                    }
                        ?>
                         </tbody>
                        </table>
                </div>
					
						<div class="col-lg-3">
                            <div class="chose_area">
                            <h4>Total:</h4>
                                 <h5 id='gtotal'></h5>
                                 <br>
								 <?php
								if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
									{
								?>

                                 <form>

                                 <a class='btn btn-default add-to-cart' href="AjouterLivraison.php">Delivery</a></td>
                                 </form>
								
                            </div>
                        </div>

		</div>
			</div>
<div class="ajouterCommande">
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Confirm your purchases</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<?php
						
						
 						if(isset($_POST['paiment'])
 
 						)

						{
						 if((!empty($_POST['paiment']))
	 
						 ) 
						 {


						$idClient=$_SESSION['id'];
						
						
						$paiment = $_POST['paiment'];
						$C1 = new Commandes($idClient,$_POST['paiment'],$total);
						$CO = new CommandesC();
						$CO->ajouter_commande($C1);
						
						$db=config::getConnexion();
						$id=$db->lastInsertId ();

						foreach($_SESSION['cart']as $key => $value)
                        {
                            $sr=$key+1;
                            $prod = $value['Item_Name']. " * $value[Quantity] ";
							$produit=$produit."+ ".$prod;
							$idP=$value['Item_id'];
							

							$total=$total+($value['Price']*$value['Quantity']);
							
							$L0 = new LigneC();			
							$L1= new Ligne($prod,$idP,$id);
							
							
							$L0->ajouter_Ligne($L1);
						}
						

	
			
			//echo"Last inserted id is $id";
	


	

		//	for($i=0;$i<strlen($idP);$i++){
			//	$idProd=substr($idP,$i,1);
				

			
			//}
		
		
			
		

$suc=1;  

	}else echo" Veuillez remplir toutes les cases";
		}else echo"Missing Information";

	

						?>

					 <form action="" method="POST">
						<ul class="user_info">
							<li class="single_field">
								<label>Client:</label>
								<input type="number" name="cli" id="cli" placeholder="<?php echo $_SESSION['id'];?>"disabled>
								
							</li>
							
							<li class="single_field">
								<label>Methode de paiment:</label>
								    <select id="paiment" name="paiment">
									<option>Cash</option>
									<option>Cheque</option>
									<option>Carte Bancaire</option>
								</select>
									
						    </li>
                           		<li class="single_field"> 
								   <label>TOTAL:</label>
                                  <label id='gtot'></label>
								  <br>
                                
								</li>
						
								<li class="single_field">
									<label>Produit</label>	
									<textarea  id="produit" name="produit" class="text right" rows="4" cols="50" placeholder="<?php echo $produit;?>"disabled ></textarea>
								</li>
							
								</ul>
								
							<input type="reset" class='btn btn-default update' value="Back">
							<input type="submit" class='btn btn-default update' value="Make Purchase">
						
							 
					 </form>
				 </div>
			   </div>
			</div>
		</div>
	</section><!--/#do_action-->
</div>
 
								<?php
						
									}
								?>
			<script>
			var gt=0;
			var iprice=document.getElementsByClassName('iprice');
			var iquantity=document.getElementsByClassName('iquantity');
			var itotal=document.getElementsByClassName('itotal');
			var gtotal=document.getElementById('gtotal');
			var gtot=document.getElementById('gtot');

			function subTotal(){
				gt=0;
				for(i=0;i<iprice.length;i++){
					itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
					gt=gt+(iprice[i].value)*(iquantity[i].value);
				}
					gtotal.innerText=gt;
					gtot.innerText=gt;				
					
			}
			subTotal();
			
			
			</script>
			
            
	</section> <!--/#cart_items-->

   
	

	

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>NATURE</span>-PET</h2>
							
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/n1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/n2.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/acc3.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/acc1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>ariana</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">ANIMAUX</a></li>
								<li><a href="">NOURRITURE</a></li>
								<li><a href="">PLANTES</a></li>
							
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About NATURE PET</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>