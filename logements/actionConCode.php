<?php
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
     $text = $_POST['text'];
     
     $sql = "INSERT INTO ConCode (libConCode) VALUE (:libConCode)";
  
      $result = $connexion->prepare($sql);
      $var = $result->execute(array(':libConCode' => $text));
  if ($var) {
          header("Location: AfficherConCode.php");
    }

?>