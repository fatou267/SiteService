<?php
session_start();
require 'include.php';
require 'entete.php';

    $result ='<h5>Bamba Socio Services le meilleur service pour servir le baol et les étudiants</h5>';
    $result .='<div class="global">';
    $result .='<h1>BSS</h1>
     <strong id="h2">BAMBA SOCIO SERVICES </strong><br>
      Le donneur universel 
      <br>
      <p>
      Conseil et assistance sur les études
      Prestation de services
      Formation et coaching
      Bourse école de formation au Sénégal et au maroc
      Preinscription au canada , en france , Belgique, turky, suisse...
      Bourse de permis de conduire..
      Cours à domicile 🏡 
      <br>
      Contact : 78 131 21 24, 77 851 58 87
      <br>
      Adresse : scat urbam a côté de sousoum hôtel 
      <br>
      Bamba socio, votre service dans le social.
      <br>
      Merci d\'avoir contacté Bamba Socio Bourse (BSB) ! Dites-nous en quoi nous pouvons vous aider.</p>
      ';
      $result .='</div>';
     
    echo $result;


require 'pied.php';
?>