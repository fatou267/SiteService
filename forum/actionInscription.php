<?php 
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

      $nom=$_POST['nom'];
      $prenom = $_POST['prenom'];
       
      $tele= $_POST['tele'];
      $email=$_POST['mail'];
 
      $mdp=$_POST['mdp'];
      $req = "INSERT INTO Utilisateur(Nom,Prenom,telephone,mail,password) VALUES (:Nom,:Prenom,:telephone,:MailUti,:password)";
 		
 			$result = $connexion->prepare($req);

 			$var = $result->execute(array(
 				':Nom'=> $nom ,
 				':Prenom' => $prenom,
 				':telephone' => $tele,
 				':mail'=>$email,
 				':password' => password_hash($mdp, PASSWORD_DEFAULT)
 			));
 				header("Location: utilisateur.php");
 			

 ?>