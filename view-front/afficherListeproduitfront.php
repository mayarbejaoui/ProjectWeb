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
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>TUNI-TROC</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/img3.png" type="image/img3.png">
    <link rel="apple-touch-icon" href="images/img3.png">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
 
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/img3.png" class="logo" alt=""height="76" width="76"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profil</a></li>
                        <li class="nav-item "><a class="nav-link" href="bepartner.php">be a partner</a></li>
                        <li class="nav-item  active"><a class="nav-link active" href="afficherlisteproduitfront.php">show product</a></li>

                        <li class="dropdown">
                            <a href="afficheravis.php" class="nav-link dropdown-toggle arrow " data-toggle="dropdown">avis et reclamation</a>
                            <ul class="dropdown-menu">
								<li><a href="afficheravis.php">show avis</a></li>
                                <li><a href="afficherreclamation.php">show reclamation</a></li>
                                <li><a href="ajouterreclamation.php">add reclamation</a></li>
                            
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="afficherListeproduitfront.php">product</a></li>

                        <li class="nav-item"><a class="nav-link" href="affichersponsor.php">Sponsor</a></li>
                        <li class="nav-item"><a class="nav-link" href="afficherposte.php">Forum</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

 
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <?php 
                          if(isset($_SESSION['id_user'])){
                             ?>

                        <li class=""><a href="logout.php">
						
							<p>LOG OUT</p>
					</a></li>
                 
                    <?php 
                    }else
                    {
                    ?>
                  
                    <li class=""><a href="signin.php">
						
                        <p>SIGN IN</p>
                </a></li>
                <li class=""><a href="signup.php">
						
                        <p>SIGN UP</p>
                </a></li>
                <?php 
                   }
    
                       
                     ?>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
          
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-5">
  <a href="pdf.php">  <button class="btn hvr-hover">get pdf</button></a>
  <form class="d-none d-md-flex ms-4" action="recherchproduit.php">
                    <input class="form-control border-0" type="search" name="rechercher" id="rechercher" search placeholder="Search">
                </form>
     </div>
                                <div class="col-md-4">
                                <h1 class="center"> liste produit</h1>
                                </div>
                                <div class="col-md-4">
                                <div class="col-md-12">
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
		<form action="triefrontprod.php" method="POST">	
              <button class="btn hvr-hover" name="trie1" value="trie1"  type="submit">Trier par prix croissants</button>
              <button class="btn hvr-hover"  name="trie2" value="trie2" type="submit">Trier par prix decroissant</button>
              <button class="btn hvr-hover" name="trie3" value="trie3" type="submit">Trier par  nouv   produits</button>
              <button class="btn hvr-hover" name="trie4" value="trie4" type="submit">Trier par ancien    produits</button>

               </form>	
             
				<br>
				<div class="widget product-category">
				<br>
                <U> <h4 class="widget-title">choose Produits :</h4></U>
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

							
							<form action="triefrontprod.php"method="POST">
							
                    
               <button class="btn hvr-hover"name="samsung" value="samsung" type="submit">samsung</button>
              <button class="btn hvr-hover" name="apple" value="apple" type="submit">APPLE</button>
                <button class="btn hvr-hover"name="oppo" value="oppo"  type="submit">Oppo</button>
               <button class="btn hvr-hover" name="huawei" value="huawei" type="submit">Huawei</button>
               <button class="btn hvr-hover" name="xiaomi" value="xiaomi" type="submit">Xiaomi</button>
					
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
							<form action="triefrontprod.php"method="POST">
              <button class="btn hvr-hover" name="MSI" value="MSI" type="submit">MSI</button>
                <button class="btn hvr-hover"name="HP" value="HP"  type="submit">HP</button>
               <button class="btn hvr-hover" name="ASUS" value="ASUS" type="submit">ASUS</button>
               <button class="btn hvr-hover" name="MAC" value="MAC" type="submit">MAC</button>
									
								
                           </form>
					    	</div>
					    </div>
					  </div>
					  
					</div>
					
				</div>
			</div>
                                  </div>
                                
    <!-- End Top Search -->
  
		
<section class="products section">
  
	<div class="container">
		<div class="row">
     
			<?php
				foreach($listeproduits as $produit){
			?>
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
					
						<?php $k="images/shop/products/". $produit['url_image'];?> 
						<img class="img-responsive" height="150" width="150" src= <?php echo $k ; ?> alt="product-img" />
						<div class="preview-meta">

						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>
                                <button class="btn hvr-hover" name="id_produit" value="<?PHP echo $produit['id_produit'];?>" type="submit">acheter</button>
									
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
    </div>
</section>

    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>


		