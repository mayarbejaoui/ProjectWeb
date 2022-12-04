<?php
	include '../Controller/produitC.php';
	$produitC=new produitC();

   
  
        $produit = $produitC->recupererproduit($_POST['id_produit']);
        ?> 

<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">
<head>

 <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

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
					<a href="index.html">
						<!-- replace logo here -->
					
						<img src="images/photo_logo.png" alt="" width="135" height="135">
						
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				

				
				

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

</section>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
								<?php $k="images/shop/products/". $produit['url_image'];?>
									<img src= <?php echo $k ; ?>  alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</div>
								
								
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
							<?php $k="images/shop/products/". $produit['url_image'];?>
								<img src= <?php echo $k ; ?>   alt='' />
							</li>
							
							
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2><?php echo $produit['nom'] ;?></h2>
				
					<span style="color:#d0121a;"><?php echo $produit['pu_vente'] ;?> DT</span>
					
					<p class="product-description mt-20">
						<label>Marque :</label> <?php echo $produit['id_scateg'] ;?> <br>
						<label>Reference : </label><?php echo $produit['id_produit'] ;?>
					</p>
					
					<span style="color:#155724;font-family:Roboto, sans-serif;font-size:13px;font-weight:bold;background-color:#d4edda;">&nbsp;En arrivage</span>
					<p> 
                    <?php echo $produit['descr'] ;?> </p>
						 
						
					<div class="color-swatches">
						<span>Couleur Dispo:</span>
						<ul>
							<li>
								<a &nbsp;&nbsp;&nbsp;href="#!" class="swatch-violet"></a>
							</li>
							<li>
								<a &nbsp;&nbsp;&nbsp;href="#!" class="swatch-black"></a>
							</li>
							<li>
								<a &nbsp;&nbsp;&nbsp;href="#!" class="swatch-cream"></a>
							</li>
						</ul>
					</div>
					
					<div class="product-quantity">
						<span>Quantité Stock:   </span>
					
						<span style="color:#d0121a;">&nbsp;&nbsp;<?php echo $produit['qte_stock'] ;?> PIECES</span>
						
						
							
						</div>
					</div>
					
				
				</div>
			</div>
		</div>
       


		<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			
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
