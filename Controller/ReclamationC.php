<?php
	include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Reclamation.php';
	class ReclamationC {
		function nbreclamation(){
			$sql="SELECT count(*) as rc from reclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Reclamation=$query->fetch();
				return $Reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function afficherReclamation(){
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function afficherrepondre(){
			$sql="SELECT * FROM repondre_rec";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function afficherReclamationforpagination($debut,$nbelement){
			$sql="SELECT * FROM reclamation limit $debut,$nbelement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function count(){
			$sql="SELECT count(*) as nb FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function afficherReclamationez($rechercher){
			$sql="SELECT * FROM reclamation where id_reclamation like '%$rechercher%' or nom_perso like '%$rechercher%' or prenom_perso like '%$rechercher%' or message like '%$rechercher%' or email like '%$rechercher%' or daterec like '%$rechercher%'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreclamation($id_reclamation){
			$sql="DELETE FROM reclamation WHERE id_reclamation=:id_reclamation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reclamation', $id_reclamation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerrepondre($id_repondre){
			$sql="DELETE FROM repondre_rec WHERE id_repondre=:id_repondre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_repondre', $id_repondre);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterreclamation($Reclamation){
			$sql="INSERT INTO reclamation (nom_perso, prenom_perso, email, num_tel, message,id_user) 
			VALUES ( :nom_perso, :prenom_perso, :email, :num_tel, :message, :id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_perso' => $Reclamation->getnom(),
					'prenom_perso' => $Reclamation->getprenom(),
					'email' => $Reclamation->getemail(),
                    'num_tel' => $Reclamation->getnum_tel(),
                    'message' => $Reclamation->getmessage(),
					'id_user' => $Reclamation->getid_user()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function ajouterrepondre($id_user,$message,$id_rec,$email){
			$sql="INSERT INTO repondre_rec (message, email, id_rec, id_user) 
			VALUES ( :message, :email, :id_rec, :id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'message' => $message,
					'email' => $email,
					'id_rec' => $id_rec,
                    'id_user' => $id_user
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererreclamation($id_reclamation){
			$sql="SELECT * from reclamation where id_reclamation=$id_reclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Reclamation=$query->fetch();
				return $Reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreclamation($Reclamation, $id_reclamation){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
		                nom_perso= :nom_perso,
		                prenom_perso= :prenom_perso,
		                email= :email,
                        num_tel= :num_tel,
                        message= :message
					WHERE id_reclamation= :id_reclamation'
				);
				$query->execute([
                    'nom_perso' => $Reclamation->getnom(),
					'prenom_perso' => $Reclamation->getprenom(),
                    'email' => $Reclamation->getemail(),
                    'num_tel' => $Reclamation->getnum_tel(),
                    'message' => $Reclamation->getmessage(),
                    'id_reclamation' => $id_reclamation
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>