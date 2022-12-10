<?php
	include 'C:\xampp\htdocs\louled\Controller\categorieC.php';
	$categorieC=new categorieC();

if (isset($_GET["id_categorie"])){
	$categorieC->supprimercategorie($_GET["id_categorie"]);
	header('Location:affichercategorie.php');
}

?>