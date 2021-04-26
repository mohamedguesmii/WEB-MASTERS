<?php
session_start(); 

include_once "../model/Commandes.php";
include "../controller/CommandesC.php";
$suc=0;
$L1=null;

    	if(isset($_POST['cli'])
		&& isset($_POST['paiment'])
		
		)

    {
			if((!empty($_POST['cli']))
			&& (!empty($_POST['paiment']))
			
		) 
		{

			
    $client = $_POST['cli'];
    $paiment = $_POST['paiment'];
$suc=1;  
}else echo" Veuillez remplir toutes les cases";
}
else
echo"Missing Information";

	
	
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
								<li><a href=""><i class="fa fa-phone"></i> +216 22 222 222</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> NATUREPET@esprit.tn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
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
								
							
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
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
                                
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html" class="active">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                      
								<li><a href="contact-us.html">Contact</a></li>
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
				  <li class="active">Shopping Cart</li>
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
                     <th scope="col">Item Price</th>
                     <th scope="col">Quantity</th>
                     <th scope="col"></th>
                    </tr>
                    
                     </thead>
                         <tbody>
                             
                         <?php
                        $total=0;
						$produit="";

                        if(isset($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart']as $key => $value)
                        {
                            $sr=$key+1;
                            $total=$total+$value['Price'];
							$produit=$produit.$value['Item_Name'];
                            echo"
                            <tr>
                            <td>$sr</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Price]</td>
                            <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
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
                            <div class="border bg-light rounded p-4">
                            <h4>Total:</h4>
                                 <h5 class="text right"><?php echo "$total DT"?></h5>
                                 <br>
                                 <form>
                                 <a class='btn btn-default add-to-cart' href="AjouterLivraison.php">Delivery</a></td>
                                 </form>
                            </div>
                        </div>

		</div>
			</div>
            
	</section> <!--/#cart_items-->

    <?php
	
	$C1 = new Commandes($client,$paiment,$total,$produit);
	$CO = new CommandesC();

	$CO->ajouter_commande($C1);

	?>


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
						<ul class="user_option">	
						</ul>

					 <form action="" method="POST">
						<ul class="user_info">
							<li class="single_field">
								<label>Client:</label>
								<input type="text" name="cli" id="cli" placeholder="Nom Client">
								
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
                                  <input type="text" id="total" name="total" class="text right" value="<?php echo "$total DT"?>"disabled ></input>
                                
								</li>
						
								<li class="single_field">
									<label>Produit</label>	
									<input type="text" id="produit" name="produit" class="text right" value="<?php foreach($_SESSION['cart']as $key => $value) {echo "$value[Item_Name]/";}?>"disabled ></input>
								</li>
							
								</ul>

							<input type="reset" class='btn btn-default update' value="Back">
							<input type="submit" class='btn btn-default update' value ="Purchase">
						
					 </form>
				 </div>
			   </div>
			</div>
		</div>
	</section><!--/#do_action-->
</div>
	

	

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