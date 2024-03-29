<?PHP
include "../controller/AnimauxC.php";
include "../controller/PlanteC.php";
include "../controller/accessoiresC.php";
require_once "headerA.php";


	$utilisateurC=new AnimauxC();
	$list=$utilisateurC->afficherpromoanimaux1 ();

	$PlantesC=new PlantesC();
	$listU=$PlantesC->afficherpromoplante1();


	$utilisateurC=new AnimauxC();
	$listeUsers=$utilisateurC->afficherAnimaux1();
	

	$utilisateurC=new NourritureC();
	$listeUser=$utilisateurC->afficherNourriture1();

	

	$utilisateurC=new PlantesC();
	$listepla=$utilisateurC->displayPlantes1();

	$utilisateurC=new accessoiresC();
	$liste=$utilisateurC->displayaccessoires1();
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | NATURE PET</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/home/4.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
</head><!--/head-->

<body>
	
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>NATURE</span>PET</h1>
									
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/plante1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/plantes2.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>NATURE</span>PET</h1>
									
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/3.jpg" class="girl img-responsive" alt="" />
								
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>NATURE</span>PET</h1>
	
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/an5.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/an7.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Animaux
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">DOGS</a></li>
											<li><a href="#">CATS </a></li>
											<li><a href="#">BIRDS </a></li>
											<li><a href="#">HAMSTERS</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Nourriture
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Plantes
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>

                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#promotions">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Promotions
										</a>
									</h4>
								</div>
								<div id="promotions" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#poloshirt">Animaux</a></li>
											<li><a href="#promoplante"> Plantes</a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Accesoires</a></h4>
								</div>
							</div>
                            
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Most Popular Breeds</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>german shepeard</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>labrador</a></li>						
									<li><a href="#"> <span class="pull-right">(32)</span>golden retreiver</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>bulldog</a></li>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">0DT</b> <b class="pull-right">600DT</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
						<h2 class="title text-center">SOME OF WHAT WE OFFRE</h2>
						<div class="col-sm-4">
                        <form action="manage_cart.php" method="POST">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/an7.jpg" alt="" />
                                            <h2>150DT</h2>
											<h5>Chat</h5>
											
											<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value='Chat'>
											<input type="hidden" name="Item_id" value='1'>
                                            <input type="hidden" name="price" value="150">
											</div>
										<div class="product-overlay">
											<div class="overlay-content">
                                            <h2>150DT</h2>
											<h5>Chat</h5>
												<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                                <input type="hidden" name="Item_Name" value='Chat'>
												<input type="hidden" name="Item_id" value='1'>
                                                <input type="hidden" name="price" value="150">
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
                            </form>
						</div>
						<div class="col-sm-4">
                        <form action="manage_cart.php" method="POST">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/n2.jpg" alt="" />
										<h2>20DT</h2>
										<h5>Croquette</h5>
										
										<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value='Croquette'>
										<input type="hidden" name="Item_id" value='2'>
                                        <input type="hidden" name="price" value="20">
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>20DT</h2>
											<h5>Croquette</h5>
											
											<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value='Croquette'>
											<input type="hidden" name="Item_id" value='2'>
                                            <input type="hidden" name="price" value="20">
										</div>
										<img src="images/home/sale.png" class="new" alt="" />
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
                            </form>
						</div>
						<div class="col-sm-4">
                        <form action="manage_cart.php" method="POST">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/an8.jpg" alt="" />
										<h2>500DT</h2>
										<h5>Labrador</h5>
										
										<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value='Chien Labrador'>
										<input type="hidden" name="Item_id" value='3'>
                                        <input type="hidden" name="price" value="500">
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>500DT</h2>
											<h5>Labrador</h5>
											
											<button type ="submit"  name="addtocart"class="btn btn-default add-to-cart">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value='Chien Labrador'>
											<input type="hidden" name="Item_id" value='3'>
                                            <input type="hidden" name="price" value="500">
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
                            </form>
						</div>
						<div class="col-sm-4">
                        <form action="manage_cart.php" method="POST">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/acc3.jpg" alt="" />
										<h2>400DT</h2>
										<h5>Niche Chat</h5>
										
										<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value='Niche Chat'>
										<input type="hidden" name="Item_id" value='4'>
                                        <input type="hidden" name="price" value="400">
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>400DT</h2>
											<h5>Niche Chat</h5>
											
											<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value='Niche Chat'>
											<input type="hidden" name="Item_id" value='4'>
                                            <input type="hidden" name="price" value="400">
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
                        </form>
						</div>
						<div class="col-sm-4">
                            <form action="manage_cart.php" method="POST">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/17.jpg" alt="" />
										<h2>65DT</h2>
										<h5>Harnais Chien</h5>
										
										<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value='Harnais Chien'>
										<input type="hidden" name="Item_id" value='6'>
                                        <input type="hidden" name="price" value="65">
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>65DT</h2>
											<h5>Harnais Chien</h5>
											
											<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value='Harnais Chien'>
											<input type="hidden" name="Item_id" value='6'>
                                            <input type="hidden" name="price" value="65">
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
                            </form>
						</div>
						
						<div class="col-sm-4">
                        <form action="manage_cart.php" method="POST">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/cache bois plante.jpg" alt="" />
										<h2>39DT</h2>
										<h5>Bol en bois</h5>
										
										<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value='Bol en bois'>
										<input type="hidden" name="Item_id" value='5'>
                                        <input type="hidden" name="price" value="39">
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>39DT</h2>
											<h5>Bol en bois</h5>
											
											<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value='Bol en bois'>
											<input type="hidden" name="Item_id" value='5'>
                                            <input type="hidden" name="price" value="39">
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
                            </form>
						</div>
						
						
					</div><!--features_items-->
					
					

					
					
				</div>
			</div>
			<div class="recommended_items"><!--recommended_items-->
						
						<h2 class="title text-center">Recommended Items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
													
								<div class="item active">	
									<div class="col-sm-4">
									<form action="manage_cart.php" method="POST">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/an5.jpg" alt="" />
													<h2>500DT</h2>
													<p>Bulldog</p>
													<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
														<input type="hidden" name="Item_Name" value='Chien Bulldog'>
														<input type="hidden" name="Item_id" value='7'>
														<input type="hidden" name="price" value="500">
										</form>
 										</div>	
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
									<form action="manage_cart.php" method="POST">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/n2.jpg" alt="" />
													<h2>20DT</h2>
													<p>Croquette</p>
													<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
														<input type="hidden" name="Item_Name" value='Croquette'>
														<input type="hidden" name="Item_id" value='8'>
														<input type="hidden" name="price" value="20">
										</form>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
									<form action="manage_cart.php" method="POST">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/an7.jpg" alt="" />
													<h2>250DT</h2>
													<p>Chat</p>
													
													<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
														<input type="hidden" name="Item_Name" value='Chat'>
														<input type="hidden" name="Item_id" value='9'>
														<input type="hidden" name="price" value="250">
										</form>
										</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
									<form action="manage_cart.php" method="POST">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/acc3.jpg" alt="" />
													<h2>560DT</h2>
													<p>Niche Chat</p>
													<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
														<input type="hidden" name="Item_Name" value='Niche Chat'>
														<input type="hidden" name="Item_id" value='10'>
														<input type="hidden" name="price" value="560">
										</form>
										</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
									<form action="manage_cart.php" method="POST">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/acc2.jpg" alt="" />
													<h2>40DT</h2>
													<p>Laisse Chien</p>
													<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
														<input type="hidden" name="Item_Name" value='Laisse Chien'>
														<input type="hidden" name="Item_id" value='11'>
														<input type="hidden" name="price" value="400">
										</form>
											</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
									<form action="manage_cart.php" method="POST">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/Kes.png" alt="" />
													<h2>15DT</h2>
													<p>Tasse de Cafe</p>
													<button type ="submit" name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
														<input type="hidden" name="Item_Name" value='Tasse de Cafe'>
														<input type="hidden" name="Item_id" value='12'>
														<input type="hidden" name="price" value="15">
										</form>
										</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
							  
						</div>
						<div class="category-tab"><!--category-tab-->
						<h2 class="title text-center">NOS PRODUITS</h2>
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Animaux</a></li>
								<li><a href="#blazers" data-toggle="tab">Nourriture</a></li>
								<li><a href="#sunglass" data-toggle="tab">Plantes</a></li>
                                <li><a href="#promoplante" data-toggle="tab">Promotions Plantes</a></li> 
								<li><a href="#promoanimaux" data-toggle="tab">Promotions animaux</a></li>
								<li><a href="#kids" data-toggle="tab">Accessoires</a></li>
								
							</ul>
						</div>
						<div class="tab-content">

						

							<div class="tab-pane fade active in" id="tshirt" >
							<form action="manage_cart.php" method="POST">
							<?PHP
							    
								foreach($listeUsers as $user){
								
							   
							?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img src="images/<?= $user['image'] ?>"  width = "100" height = "300">
												<h2> <?php echo $user['prix']."DT"; ?></h2>
												<p><?PHP echo $user['typee']; ?></p>
												<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>

												</div>
											
										</div>
									</div>
								</div>
								<?PHP
			              	}
							
			                ?>
							
                                            <input type="hidden" name="Item_Name" value='<?php echo $user['typee']; ?>'>
											<input type="hidden" name="Item_id" value='<?php echo $user['id_animaux']; ?>'>
                                            <input type="hidden" name="price" value="<?php echo $user['prix']; ?>">
							</div>
							</form>

                            
							
							<div class="tab-pane fade" id="blazers" >
							<form action="manage_cart.php" method="POST">
							<?PHP
							    
								foreach($listeUser as $user){
								  
							   
							?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img src="images/<?= $user['image'] ?>"   width = "100" height = "300">
											<h2> <?php echo $user['prix']."DT"; ?></h2>
												<p><?PHP echo $user['nom']; ?></p>
												<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
												</div>
											
										</div>
									</div>
								</div>
								<?PHP
			              	}
							
			                ?>
											<input type="hidden" name="Item_Name" value='<?php echo $user['nom']; ?>'>
											<input type="hidden" name="Item_id" value='<?php echo $user['id']; ?>'>
                                            <input type="hidden" name="price" value="<?php echo $user['prix']; ?>">
											</form>
							
							</div>
							<div class="tab-pane fade" id="promoanimaux" >
							<form action="manage_cart.php" method="POST">
							   <?PHP
							    
				                  foreach($list as $useer){
									$prix = $useer['prix'];
									$prixr= $useer['prix_promotions'];
									$p= $prix *$prixr* 0.01;
									$pe = $prix - $p;
					             
			                  ?>
								
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img src="images/<?= $useer['image'] ?>"  width = "100" height = "300">
											<h2>Prix : <?PHP echo $pe ?>DT</h2> <div ><td>Solde : <?php echo $useer['prix_promotions']; ?>%</td></div>
												<p><?PHP echo $useer['typee']; ?></p>
												<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>
											</div>
											
										</div>
									</div>
							
							
								</div>
								<?PHP
			              	}
							
			                ?>
											<input type="hidden" name="Item_Name" value='<?php echo $useer['typee']; ?>'>
											<input type="hidden" name="Item_id" value='<?php echo $useer['id_promoanimaux']; ?>'>
                                            <input type="hidden" name="price" value="<?php echo $useer['prix']; ?>">
											</form>
							</div>	

							<div class="tab-pane fade" id="sunglass" >
							<form action="manage_cart.php" method="POST">
							<?PHP
							    
								foreach($listepla as $user){
								  
							   
							?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img src="images/<?= $user['image'] ?>"  width = "100" height = "300">
											<h2> <?php echo $user['prix']."DT"; ?></h2>
												<p><?PHP echo $user['nom']; ?></p>
												<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>										
												</div>
											
										</div>
									</div>
								</div>
								<?PHP
			              	}
							
			                ?>
							<input type="hidden" name="Item_Name" value='<?php echo $user['nom']; ?>'>
											<input type="hidden" name="Item_id" value='<?php echo $user['id']; ?>'>
                                            <input type="hidden" name="price" value="<?php echo $user['prix']; ?>">
											</form>
							
							</div>
							<div class="tab-pane fade" id="kids" >
							<form action="manage_cart.php" method="POST">
							<?PHP
							    
								foreach($liste as $user){
								  
							   
							?>

								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img src="images/<?= $user['image'] ?>"  width = "100" height = "300">
											<h2> <?php echo $user['prix']."DT"; ?></h2>
												<p><?PHP echo $user['categories']; ?></p>
												
												<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>										
												</div>
											
										</div>
									</div>
									</div>
									<?PHP
			              	}
							
			                ?>
							<input type="hidden" name="Item_Name" value='<?php echo $user['categories']; ?>'>
											<input type="hidden" name="Item_id" value='<?php echo $user['id']; ?>'>
                                            <input type="hidden" name="price" value="<?php echo $user['prix']; ?>">
											</form>
								</div>
								
							<div class="tab-pane fade" id="promoplante" >
							<form action="manage_cart.php" method="POST">
                            <?PHP
							 $i=0;
				foreach($listU as $usr){
					$prix = $usr['prix'];
						$prixr= $usr['prix_promoplante'];
						$p= $prix *$prixr* 0.01;
						$pe = $prix - $p;
			                   ?>
                           

							
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                            <img src="images/<?= $usr['image'] ?>"  width = "100" height = "300">
												<h2>Prix : <?PHP echo $pe ?>DT</h2> <div ><td>Solde : <?php echo $usr['prix_promoplante']; ?>%</td></div>
												<p><?PHP echo $usr['nom']; ?></p>
												<button type ="submit"  name="addtocart" class="btn btn-default add-to-cart">Add to cart</button>										
												</div>
											
										</div>
									</div>
								</div>
								
								
							
							
                            
                            <?PHP
			              	}
							
			                ?>
							<input type="hidden" name="Item_Name" value='<?php echo $usr['nom']; ?>'>
											<input type="hidden" name="Item_id" value='<?php echo $usr['id_promo']; ?>'>
                                            <input type="hidden" name="price" value="<?php echo $usr['prix']; ?>">
											</form>
</div>



						</div>
                        
					</div><!--/category-tab-->
					
					</div><!--/recommended_items-->
		</div>
		
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>NATURE</span>PET</h2>
							
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
										<img src="images/home/plante1.jpg" alt="" />
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
										<img src="images/home/plantes2.jpg" alt="" />
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
										<img src="images/home/an4.jpg" alt="" />
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
							<p>ARIANA </p>
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
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Animaux</a></li>
								<li><a href="#">Nourriture</a></li>
								<li><a href="#">Plantes</a></li>
								<li><a href="#">Accesoires</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Nature PET</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>