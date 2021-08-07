<?php 
session_start();
require 'include.php';
require 'entete.php';
     
  $result = '<h5>Nos différents services</h5>'; 

  foreach ($categorie as $key => $value) {
         $result .='<div class="rounder" style="width: 18rem; display:inline-block;">
            <a href="http://bambasocio.atwebpages.com/'.$value["page"].'"><img src="http://bambasocio.atwebpages.com/src/image/'.$value["image"].'" class="img" alt="produit" width="300px" height="300px"></a>
            <div class="" style="text-align:center;">
            <h5 class="">'.$value["libCat"].'</h5></div></div>&nbsp;&nbsp;&nbsp;';
     } 

echo $result;

require 'pied.php';
?>