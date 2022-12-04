<?php
    include_once '../Model/produit.php';
    include_once '../Controller/produitC.php';

    $error = "";

    // create produit
    $produit = null;

    // create an instance of the controller
    $produitC = new produitC();
    if (
        isset($_POST["id_produit"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["descr"]) &&
		isset($_POST["url_image"]) && 
        isset($_POST["code_categ"]) &&
		isset($_POST["id_scateg"]) &&
		isset($_POST["pu_achat"]) &&
		isset($_POST["pu_vente"]) &&
		isset($_POST["qte_stock"]) &&
    isset($_POST["date"]) 
      
    ) {
        if (
            !empty($_POST["id_produit"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["descr"]) && 
			!empty($_POST["url_image"]) && 
            !empty($_POST["code_categ"]) &&
			!empty($_POST["id_scateg"]) &&
			!empty($_POST["pu_achat"]) &&
			!empty($_POST["pu_vente"]) &&
			!empty($_POST["qte_stock"]) &&
      !empty($_POST["date"]) 
            
        ) {
            $produit = new produit(
                $_POST['id_produit'],
				$_POST['nom'],
                $_POST['descr'], 
				$_POST['url_image'],
                $_POST['code_categ'],
				$_POST['id_scateg'],
				$_POST['pu_achat'],
				$_POST['pu_vente'],
				$_POST['qte_stock'],
        $_POST['date']

              
            );
            $produitC->modifierproduit($produit, $_POST['id_produit']);
            header('Location:afficherListeproduits.php');
        }
        else
            $error = "Missing information";
    }

    
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

</head>

<body id="body">

<section class="ajouter_categ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
          
          </a>
          <h2 class="text-center">Modifier Produit  :</h2>
		  <p >&nbsp;&nbsp;</p>


          <form method="POST" class="text-left clearfix"  name="f" action="modifierproduit.php">


            
              <input type="text" class="form-control" name="id_produit" id="id_produit"  value="id produit">
			  <p>&nbsp;</p>

           
           
              <input type="text" class="form-control" name="nom" id="nom"  value="nom produit">
			  <p>&nbsp;</p>

         
              <input type="text" class="form-control"  name="descr" id="descr" value="description">
			  <p>&nbsp;</p>

            
                <input type="file" class="form-control"  name="url_image" id="url_image"  value="URL photo de produit">
				<p>&nbsp;</p>

              <input type="text" class="form-control"  name="code_categ" id="code_categ" value="Code categorie">
			  <p>&nbsp;</p>

              <input type="text" class="form-control" name="id_scateg" id="id_scateg"  value="Code famille">
			  <p>&nbsp;</p>

              <input type="text" class="form-control"  name="pu_achat" id="pu_achat" value="Prix achat">
			  <p>&nbsp;</p>

                <input type="text" class="form-control"  name="pu_vente" id="pu_vente" value="Prix de vente">
				<p>&nbsp;</p>

                <input type="text" class="form-control"  name="qte_stock" id="qte_stock" value="quantite stock">
				<p>&nbsp;</p>
        <input type="text" class="form-control"  name="date" id="date" value="date">
				<p>&nbsp;</p>


				
					<button   type="submit" onclick="verif()" class="btn btn-main text-center">Modifier Produit</button>
				
				
             
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</section>

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
