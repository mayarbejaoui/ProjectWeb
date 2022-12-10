<?php
	include 'C:\xampp\htdocs\louled\Controller\produitC.php';
	$produitC=new produitC();

if (isset($_GET["id_produit"])){
	$produitC->supprimerproduit($_GET["id_produit"]);
	header('Location:afficherproduit.php');
}

?>