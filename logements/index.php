<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

require 'entete.php';
    $result ='<h5>Bienvenue dans la rubrique des logements universitaires</h5>';

     $result .='Attendez vous parler de <strong id="h2">Claudel</strong> ou plus précisément des logements universitaires ,Bamba socio logement <strong id="h1">BSL</strong> est là pour vous donner des meilleures informations , conseils et aides concernant ces logements. <br><br>';
     $result .='<div class="global">';
      $result  .='<a href="codification.php" class="btn btn-outline-primary design"><strong>Codifications</strong></a><br><br>
        <p>Codifications:Besoin d\'informations pour les codifications reste  sur place et consulte les services de logements de Bamba socio en un seul clic votre probléme est résolu .<strong id="h1">BSL</strong> tout le monde a droit à l\'information .</p><br><br>
      ';

       $result  .='<a href="aidelogement.php" class="btn btn-outline-primary design"><strong>Conseils</strong></a><br><br>
       <p>Conseils:Ayant des difficultés de trouver un logement universitaire , nos services de logements peuvent vous aider à  obtenir un logement partagé avec d\'autres étudiants à un prix convenable. .<strong id="h1">BSL</strong> tout le monde a droit à l\'information .</p><br><br>
       ';

       $result  .='<a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj07NDNkpvrAhVmRRUIHSNgB60QFjAAegQIBBAB&url=https%3A%2F%2Fwww.ucad.sn%2Findex.php%3Foption%3Dcom_content%26view%3Darticle%26id%3D252%26Itemid%3D277&usg=AOvVaw2frV6LCdDDc473bNQHLqro" class="btn btn-outline-primary design"><strong>Guide de l\'étudiant</strong></a><br><br>';
       $result .='</div>';
     
     echo $result;



require 'pied.php';
?>