<?php
	include '../Controller/produitC.php';
	$produitC=new produitC();
    $listeproduits=$produitC->afficherproduits(); 
	
	$produit = $produitC->supprimerproduit($_POST['id_produit']);
?>
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



<body id="body">

<h2 class="text-center">la liste des produit :</h2>

<section class="products section">
	<div class="container">
		<div class="row">
			

		

			<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                           
                     
						
                                <table class="table table-bordered" id="dataTable" width="100%" >
									
                                   
                                        <tr>
									
                                            <th>id produit </th>
                                            <th>nom produit</th>
                                            <th>photo produit</th>
                                            <th>categorie</th>
                                            <th> marque</th>
                                            <th>prix achat</th>
											<th>prix vente</th>
											<th>Quantite stock</th>
                                        </tr>
                                        <table>




               
							<?php
    if (isset($_POST['submit']))
    {
      $nom_produit=$_POST['rechercher'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit' or id_produit='$nom_produit' or code_categ='$nom_produit' ");


    
	while($result = $tree->fetch()){
    
	

?>

                                        <table class="table table-bordered"  width="100%">
										
                                   
                                  
                                
								
                              <tr>
              
			
											
                                            <td><?PHP echo $result['id_produit']; ?> </td>
                                            <td><?PHP echo $result['nom']; ?> </td>
                                            <?php $k="images/shop/products/". $result['url_image'];?>
                                            <td><img class="img-responsive"style="width:50px;height:50px;" src= <?php echo $k ; ?> alt="product-img" /></td>
                                            <td><?PHP echo $result['code_categ']; ?></td>
											<td><?PHP echo $result['id_scateg']; ?></td>
                                            <td><?php echo $result['pu_achat'] ."DT"; ?></td>
                                            <td><?php echo $result['pu_vente'] ."DT"; ?></td>
											<td><?PHP echo $result['qte_stock']; ?></td>
											<form method="POST" action="product-single.php">
											<td><input type="submit" name="afficher" class="tf-ion-android-cart" value="aff">
						<input type="hidden" value=<?PHP echo $result['id_produit']; ?> name="id_produit"></td>
						</form>
						
						<form method="POST" action="afficherListeproduits2.php">
						<td>               <input type="submit" name="suprimmer" class="tf-ion-android-cart" value="sup">
						<input type="hidden" value=<?PHP echo $result['id_produit']; ?> name="id_produit">	       </td>
						</form>
						<form method="POST" action="modifierproduit.php">
											<td><input type="submit" name="modifier" class="tf-ion-android-cart" value="modif">
						<input type="hidden" value=<?PHP echo $result['id_produit']; ?> name="id_produit">	</td>
						</form>
                                        </tr>
                                       <?php 
                                       	} }?>
                                   
                                </table>
                            </div>
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
