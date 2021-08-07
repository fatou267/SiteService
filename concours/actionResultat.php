<?php
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
    
   $lien = $_POST['lien'];
   $text = $_POST['text'];

   $sql = "INSERT INTO Resultat (libResultat,lien) VALUES (:libResultat, :lien)";
      $result = $connexion->prepare($sql);
      $var = $result->execute(array(':libResultat' => $text, ':lien' =>$lien));

       if ($var) {
          header("Location: afficherResultat.php");
    }
  
?>