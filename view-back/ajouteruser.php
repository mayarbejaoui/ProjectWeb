
<?php
session_start();

if(isset($_SESSION["id_user"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}
?>
<?php
    include_once 'C:\xampp\htdocs\louled\Model\User.php';
    include_once 'C:\xampp\htdocs\louled\Controller\UserC.php';

    $error = "";

    // create offre
    $user = null;

   

    

    // create an instance of the controller
    $UserC = new UserC();
    if (
		isset($_POST["username"]) &&		
        isset($_POST["nom"]) &&
		isset($_POST["prenom"]) &&
        isset($_POST["date_nais"]) &&
        isset($_POST["photo"]) &&		
        isset($_POST["adresse"]) &&
		isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        isset($_POST["num_tel"])
    ) if (
        isset($_POST["username"]) &&		
        isset($_POST["nom"]) &&
		isset($_POST["prenom"]) &&
        isset($_POST["date_nais"]) &&
        isset($_POST["photo"]) &&		
        isset($_POST["adresse"]) &&
		isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        isset($_POST["num_tel"])
    ){
        if (strlen($_POST["password"])<8) 
        { 
            echo '<script>alert("passwor must be more then 8 characters")</script>';
        }
        else if (($UserC->recupereremail($_POST["email"]))!="")
        {
            echo '<script>alert("email already used")</script>';
        }
        else if (($UserC->recupererusername($_POST["username"]))!="")
        {
            echo '<script>alert("username already used")</script>';
        }
        else if (strlen($_POST["num_tel"])!=8)
        {
            echo '<script>alert("must use valid phone number")</script>';
        }
        else
        {
            $user = new User(
               $_POST["nom"],		
                $_POST["prenom"] ,
                $_POST["date_nais"],
                $_POST["email"],
                $_POST["photo"],	
                $_POST["adresse"],
                $_POST["username"],
                $_POST["password"],
                $_POST["num_tel"] 
              );
              $a=$_POST['dateModification'];
            $UserC->ajouterUser($user);
            header("Location:Afficheruser.php");
        }
        }
        else
            $error = "Missing information";

        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="afficheruser.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TUNI-TROC</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="images/<?php echo $_SESSION["photo"]; ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["nom"]; ?></h6>
                        <span><?php echo $_SESSION["role"]; ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="afficheruser.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Gestion user</a>
                    <a href="afficheravis.php" class="nav-item nav-link  "><i class="fa fa-tachometer-alt me-2"></i> Gestion avis</a>
                    <a href="afficherreclamation.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Gestion recl</a>

                    <a href="afficherposte.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Gestion poste</a>
                    <a href="affichercomment.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Gestion comment</a>

                    <a href="affichersponsor.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Gestion sponsor</a>
                    <a href="afficherpublicite.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Gestion publicite</a>

                    <a href="afficherproduit.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Gestion produit</a>
                    <a href="affichercategorie.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Gestion categorie</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
               
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="images/<?php echo $_SESSION["photo"]; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["nom"];   ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profil.php" class="dropdown-item">My Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
		


        <button class="btn btn-warning"><a href="Afficheruser.php">Retour à la liste des utilisateur</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
  
        
        <form id="myform" name="myform" onsubmit="return validateForm()" method="POST" >
                            <div class="row">
                            <div class="col-md-4">
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Votre username" >
                                     
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                  </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Votre nom" id="nom" class="form-control" name="nom" >
                                     
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                  </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" >
                                      
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="date" class="form-control" id="date_nais" name="date_nais" placeholder="Votre date_nais" >
                                          

                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    
                                    </div>
                                    <div class="col-md-4">
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="photo" id="photo" />
                                      
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" >
                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Votre email" >
                                      
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Votre password" >
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-4">
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="num_tel" name="num_tel" placeholder="Votre num_tel" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  <div class="col-md-5">
                                  
                                  </div>
                                    <div class="submit-button text-center">

                                    <input class="btn hvr-hover" type="submit" value="add user"> 
                                    </div>
                                </div>
                            </div>
                        </form>

   </div>
	      <!-- Footer End -->
		  </div>
        <!-- Content End -->

		</div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script defer src="validate.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>