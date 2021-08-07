<?php
 $connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');
    
  
  
  if (!empty($_FILES)) {
   $img=$_FILES['img'];
   //print_r($img); exit();
   $text = $_POST['text'];

   copy($img["tmp_name"], "./pub/SN/".$img['name']);
    $sql = "INSERT INTO Senegal (libsn,image) VALUES (:libsn, :image)";

    $result = $connexion->prepare($sql);
    $var = $result->execute(array(':libsn' => $text, ':image' =>$img['name']));
       if ($var) {
          header("Location: AfficherSN.php");
    }
   }  
  
?>