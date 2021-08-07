<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

   
        $mail = $_POST['mail'];
        $mdp= $_POST['mdp'] ;
        $conf = $_POST['conf'];
        if ($mdp == $conf) {
        	
    
       	  $sql = "SELECT * FROM Utilisateur WHERE mail = ?";
 
	      $result = $connexion->prepare($sql);
	      $result->execute(array($mail));
	      $var = $result->fetch(PDO::FETCH_ASSOC);
	       //print_r($var); exit();
	      if ($var){
	               $sql1 = "UPDATE `Utilisateur` SET password = ? WHERE mail = ?";
	   
     		      $result1 = $connexion->prepare($sql1);
                // print_r($result1); exit();
		     	 $env = $result1->execute(array(password_hash($mdp, PASSWORD_DEFAULT),$var['mail']));
               // print_r($env); exit();
               if ($env) {
                  echo('<script>
                  alert("Modification reussie!!. Veuillez vous connecter avec le nouveau de mot de passe ");
                  location.href = "index.php";
                  </script>');
               }
               else
               {
                 echo('<script>
                  alert("Modification echouée");
                  location.href = "recuperer.php";
                  </script>');
               }


       }
       else
       {

       	 echo('<script>
                  alert("l email introuvable!!");
                  location.href = "recuperer.php";
                  </script>');
       }
   }
   else
   {
   	  echo('<script>
                  alert("Veuillez saisir deux mots de passe identiques!!");
                  location.href = "recuperer.php";
                  </script>');

      
   }
   
?>           


