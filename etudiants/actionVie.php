<?php
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

     $text = $_POST['text'];

     $sql = "INSERT INTO Vie (libVie) VALUE (:libVie)";
  
      $result = $connexion->prepare($sql);
      $var = $result->execute(array(':libVie' => $text));

     if ($var) {
          header("Location: AfficherVie.php");
    }


?>
 