<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

require 'entete.php';

     $result ='<h5>Bienvenue dans la rubrique destinée uniquement aux étudiants</h5>';
     $result .='Vous venez de décrocher votre baccalauréat et Vous souhaitez avoir les informations concernant les études supérieures  ou avez vous besoin de conseils pour bien faire vos choix concernant l\'orientation ,Bamba socio orientation <strong id="h1">BSO</strong> est à vos services. <br><br>' ; 
     $result .='<div class="global">';
     $result  .='<a href="orientation.php" class="btn btn-outline-primary design"><strong>Orientations</strong></a><br><br>
     <p>Orientations: Nouveaux bacheliers ne connaissant rien sur les orientations ,nos services d\'orientations sont là pour vous alors faites un seul clic pour avoir toutes les informations dont vous cherchez ou qui tourmentez votre tête depuis .<strong id="h1">BSO</strong> le meilleur service des orientations au Sénégal .</p><br><br>

     ';
     $result  .='<a href="conseils.php" class="btn btn-outline-primary design"><strong>Conseils</strong></a><br><br>
     <p>Conseils: Préoccuper par ce qui m\'entend après le baccalauréat ,trop envieux de découvrir le monde universitaire , <strong id="h1">BSO</strong> est à vos services en vous procurant de meilleurs conseils pour vous s\'informer , vous encourager et vous soutenir de tous ce qui vous entend une fois à l\'université. <strong id="h1">BSO</strong> le meilleur service des orientations au Sénégal .</p> <br><br>';

     $result  .='<a href="viesocial.php" class="btn btn-outline-primary design"><strong>Vie étudiantine</strong></a><br><br>
     <p>Vie étudiantine: Une fois étudiant , ta vie va connaitre des changements de temps en temps car la vie universitaire est tout à fait différente de la vie chez toi .Donc nous vous conseillons à comment bien mener et assurer sa vie étudiantine. <strong id="h1">BSO</strong> le meilleur service des orientations au Sénégal .</p><br><br> ';

     $result .='</div>';

     echo $result;

require 'pied.php';
?>