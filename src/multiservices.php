<?php
session_start();
require 'include.php';
require 'entete.php';

 $result ='<h5>Bienvenue dans la rubrique mumtiservices</h5>';
     $result .='<div class="global">';
     $result .='<p>Cette partie est uniquement dédiée aux opérateurs qui gérent les paiements des bourses .</p><p>Pour vos réclamations de bourses et allocations scolaires ,veuillez vous joindre à ces numéros :</p>';
     $result .= '<table align=center><tr>';
      $result .='<td><strong id="h2">Proximo:</strong></td><td>&nbsp;&nbsp;<strong>338693130 / 765293740</strong></td></tr>';
      $result .='<tr><td><strong id="h2">Sesapay:</strong></td><td>&nbsp;&nbsp;<strong>783080101 / 783080000 </strong></td></tr>';
      $result .='<tr><td><strong id="h2">Wizall:</strong></td><td>&nbsp;&nbsp; <strong>338649909</strong></td></tr>';
      $result .='<tr><td><strong id="h2">Ecobank:</strong></td><td>&nbsp;&nbsp;<strong>338692990</strong></td></tr>';
      $result .='<tr><td><strong id="h2">Wari:</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<strong>338292939</strong></td></tr>';
      $result .='</table>';

     $result .='</div>';
    

    echo $result;

require 'pied.php';
?>