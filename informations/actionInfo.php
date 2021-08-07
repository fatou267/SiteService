<?php
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

  
  if (!empty($_FILES)) {
   $img=$_FILES['img'];
   //print_r($img); exit();
   $text = $_POST['text'];
  
   copy($img["tmp_name"], "./pub/inf/".$img['name']);

    $sql = "INSERT INTO Info (libInfo,image) VALUES (:libInfo,:image)";
      $result = $connexion->prepare($sql);
      $var = $result->execute(array(':libInfo' => $text, ':image' =>$img['name'] ));

      if ($var) {
          header("Location: AfficherInfo.php");
    }

   }  
   
?>
 