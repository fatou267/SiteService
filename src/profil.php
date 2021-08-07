<?php
session_start();
require 'include.php';
require 'entete.php';


$result = '<div class="update"><ul class="list-group">
  <li class="list-group-item">Nom: '.$_SESSION["user"]["Nom"].'</li>
  <li class="list-group-item">Prénom: '.$_SESSION["user"]["Prenom"].'</li>
  <li class="list-group-item">Téléphone: '.$_SESSION["user"]["telephone"].'</li>
  <li class="list-group-item">Email: '.$_SESSION["user"]["mail"].'</li>
</ul></div>


<div class ="mt-2">
<a href="update.php" class="btn btn-block btn-outline-primary"><strong>Mettre à jour mes données</strong></a>
</div>

';


   echo  $result;


 require 'pied.php';
?>