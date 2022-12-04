<?php
session_start();

if(isset($_SESSION["id_user"])) {
}else{
  session_destroy();
	header('Location: signin.php');
 
}
?>
<?php
	include 'C:\xampp\htdocs\louled\Controller\PosteC.php';
	$PosteC=new PosteC();

if (isset($_GET["id_poste"])){
    if($PosteC->recupererlike($_GET["id_poste"],$_SESSION["id_user"])!="")
    {
        $PosteC->dislikeposte($_GET["id_poste"],$_SESSION["id_user"]);
        $poste=$PosteC->recupererPoste($_GET["id_poste"]);
       
        $PosteC->cancellike($_GET["id_poste"]);
        header("Location:afficherposte.php");

    }
    else
    {
        $PosteC->likeposte($_GET["id_poste"],$_SESSION["id_user"]);
        $poste=$PosteC->recupererPoste($_GET["id_poste"]);
       
        $PosteC->addlike($_GET["id_poste"]);
        header("Location:afficherposte.php");

    }


}

?>