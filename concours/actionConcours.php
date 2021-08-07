<?php
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
    
  
  if (!empty($_FILES)) {
   $img=$_FILES['img'];
   //print_r($img); exit();
   $text = $_POST['text'];
  
   copy($img["tmp_name"], "./pub/Cc/".$img['name']);

    $sql = "INSERT INTO Concours (libConcours,image) VALUES (:libConcours, :image)";
  
      $result = $connexion->prepare($sql);
      $var = $result->execute(array(':libConcours' => $text, ':image' =>$img['name']));
      if ($var) {
          header("Location: AfficherConcours.php");
    }

   }  
   ?>