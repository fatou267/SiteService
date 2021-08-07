<?php
session_start();
require 'include.php';
require 'entete.php';
$result ='<h5>Bienvenue dans la rubrique aide</h5>';
     $result .='<div class="global">';
     $result .='Aprés avoir consulter nos différents services vous n\'avez pas été satisfait alors veuillez nous <strong id="h2">s\'appeler  </strong>directement sur ce numéro <strong id="h2">78-131-21-24</strong> pas de message sur  <strong id="h3">WhatsApp</strong>';
     $result .='</div>';
    
    echo $result;

  
require 'pied.php';
?>