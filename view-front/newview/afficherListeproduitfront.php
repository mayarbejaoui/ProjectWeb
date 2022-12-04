<?php
// On prolonge la session
session_start();



?>
<?php



include '../Controller/produitC.php';

$produitC=new produitC();

$listeproduits=$produitC->afficherproduits(); 



?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>CyberUtopia</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>+216 216 000 111</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">
						<!-- replace logo here -->
					
						<img src="images/photo_logo.png" alt="" width="135" height="135">
						
					</a>
				</div>
			</div>
			<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 8px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid  #e7e7e7;
}

</style>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-android-cart"></i>Panier</a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">$1799.00</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="cart.html" class="btn btn-small">voir panier</a></li>
								<li><a href="checkout.html" class="btn btn-small btn-solid-border">Vérifier</a></li>
							</ul>
						</div>

					</li><!-- / Cart -->

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Search</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->


				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->

<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="index.php">Accueil</a>
					</li><!-- / Home -->
					
					
					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Magasin<span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Pages</li>
										<li role="separator" class="divider"></li>
										<li><a href="afficherListeproduitfront.php">Shop</a></li>
									

									</ul>
								</div>

								<!-- Layout -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
								
								</div>

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Offres<span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Introduction -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
									
									</ul>
								</div>


								<!-- Mega Menu -->
								<div class="col-sm-3 col-xs-12">
									<a href="shop.html">
										<img class="img-responsive" src="images/shop/header-img.jpg" alt="menu image" />
									</a>
								</div>
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->



					<!-- Blog -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Contact <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="contact.html">Contactez-nous</a></li>
							<li><a href="about.html">CyberUtopia</a></li>
							
					
						</ul>
					</li><!-- / Blog -->

					<!-- Shop -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Votre Compte<span
								class="tf-ion-ios-arrow-down"></span></a>


						<ul class="dropdown-menu">
							<!-- Gestion de l'utilisateur -->
							<?php
                            // On teste si la variable de session existe et contient une valeur
                           if(!empty($_SESSION['e']))
                            {
                            ?>

							<li><a href="\cyberutopia\themes\front-office\Views\logout.php">Se Déconnecter</a></li>
							
							<li><a href="\cyberutopia\themes\front-office\Views\profile-details.php">Profil client</a></li>
							<?php
							}
							else
							{
                            ?>
									<li><a href="\cyberutopia\themes\front-office\Views\login.php">Se connecter</a></li>
							<li><a href="\cyberutopia\themes\front-office\Views\signin.php">Créer un compte</a></li>
							<?php
							}
							?>

                         	<!--/ Gestion de l'utilisateur -->


							<li><a href="order.html">Commandes</a></li>
						</ul>

					</li><!-- / Blog -->
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>







<form action="afficherListeproduitfrontfamille.php" method="POST" target="_blank" class="newsletter-inner">
                           <div class="row">
						   <div class="col-2">
						   </div>
						   <div class="col-10">
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input name="rechercher" placeholder="rechercher" required="" type="rechercher">
								<button type="submit"  name="submit"  class="btn">Rechercher</button>
								</div>
								</div>
							</form>

		
<section class="products section">
	<div class="container">
		<div class="row">
        
			<div class="col-md-3">
				<div class="widget">
					<h4 class="widget-title">Catégories</h4>
					<form method="post" action="#">
					
                        <select class="form-control">
                            <option> Tech </option>
							<option> Vetement  </option>
                           
                        </select>
			
                    </form>
	            </div>

				
			
                 
				<br>
				<h4 class="widget-title">TRIER </h4>
				<form action="afficherListeproduitfrontfamille.php"method="POST">
					
				<button name="trie1" value="trie1" class="button button1">Trier par prix  croissant</button>
				<button name="trie2" value="trie2" class="button button1">Trier par prix  decroissant </button>
				<button name="trie3" value="trie3" class="button button1">Trier par  les nouveaux produits </button>
				<button name="trie4" value="trie4" class="button button1">Trier par  les anciens produits </button>
                </form>
				<br>
				<div class="widget product-category">
				<br>
					<h4 class="widget-title">Produits</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
					  	<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      	<h4 class="panel-title">
						        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										smartphone
						        	</a>
						      	</h4>
						    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">

								<ul>

							
							<form action="afficherListeproduitfrontfamille.php"method="POST">
								<li> <button name="samsung" value="samsung" class="button button1">samsung</button>	
									
						</li>
                    


						<li>
						<button name="apple" value="apple" class="button button1">APPLE</button>	
						 
						</li>
						<li> <button name="oppo" value="oppo" class="button button1">Oppo</button>
							
						</li>
						<li> <button name="huawei" value="huawei" class="button button1">Huawei</button>
						</li>
						<li> 
						<button name="xiaomi" value="xiaomi" class="button button1">Xiaomi</button>
						</li>
</form>
								</ul>
							</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					         	PC
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					    	<div class="panel-body">
							<form action="afficherListeproduitfrontfamille.php"method="POST">
					     		<ul>
									<li><button name="MSI" value="MSI" class="button button1">MSI</button></li>
									<li><button name="HP" value="HP" class="button button1">HP</button></li>
									<li><button name="ASUS" value="ASUS" class="button button1">ASUS</button></li>
									<li><button name="MAC" value="MAC" class="button button1">MAC</button></li>
								</ul>
                           </form>
					    	</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          	Accessoires
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					    	<div class="panel-body">
									
							<form action="afficherListeproduitfrontfamille.php"method="POST">
					      		<ul>
									<li><button name="accessoires smartphone" value="accessoires smartphone" class="button button1">accessoires smartphone</button>
										</li>
									<li><button name="accessoires pc" value="accessoires pc" class="button button1">accessoires pc portable</button>
										</li>
									
								</ul>

                                 </form>
					    	</div>
					    </div>
					  </div>
					</div>
					
				</div>
			</div>
			
<section class="products section">
	<div class="container">
		<div class="row">
			<?php
				foreach($listeproduits as $produit){
			?>
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						<?php $k="images/shop/products/". $produit['url_image'];?> 
						<img class="img-responsive" src= <?php echo $k ; ?> alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value=<?PHP echo $produit['id_produit']; ?> name="id_produit">
									
								</li>
								
							</ul>
						</form>


					

					
					



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php"><?php echo $produit['nom']; ?></a></h4>
						<p class="price"><?php echo $produit['pu_vente'] ."DT"; ?></p>
					</div>
				</div>
			</div>
			<?php
				}
			?>

		</div>
	</div>
</section>

		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

				</div>				
			</div>
		
		</div>
	</div>
</section>




<section class="section instagram-feed">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>View us on instagram</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="instagram-slider" id="instafeed" data-accessToken="IGQVJYeUk4YWNIY1h4OWZANeS1wRHZARdjJ5QmdueXN2RFR6NF9iYUtfcGp1NmpxZA3RTbnU1MXpDNVBHTzZAMOFlxcGlkVHBKdjhqSnUybERhNWdQSE5hVmtXT013MEhOQVJJRGJBRURn"></div>
			</div>
		</div>
	</div>
</section>




<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACTEZ-NOUS</a>
					</li>
					<li>
						<a href="shop.html">MAGASIN</a>
					</li>
					<li>
						<a>cyberutopia</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">MoneyMakers</a></p>
			</div>
		</div>
	</div>
</footer>



    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
