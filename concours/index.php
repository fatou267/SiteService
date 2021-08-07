<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

require 'entete.php';
  $result ='<h5>Bienvenue dans la rubrique des concours en cours</h5>';
     
     $result.='<p>Nos services de concours vous donne tous les détails sur les concours ouverts à temps réel. Bamba socio concours <strong id="h1">BSC</strong> l\'information a temps réel.</p>';
     $result .='<div class="global">';
     $result  .='<a href="concoursouverts.php" class="btn btn-outline-primary design"><strong>Concours ouverts</strong></a><br><br>
        <p>Concours ouverts:Besoin d\'informations pour tous les concours nationaux comme internationaux , alors on est là pour vous . <strong id="h1">BSC</strong> l\'information a temps réel. </p><br>
      ';

       $result  .='<a href="resultat.php" class="btn btn-outline-primary design"><strong>Résultats</strong></a><br><br>
       <p>Résultats:Avez vous participer à un concours et vous avez besoin  d\'informations concernant les résultats alors nos services est là. <strong id="h1">BSC</strong> l\'information a temps réel.</p><br><br>
       ';
     $result .='</div>';
     


     echo $result;



require 'pied.php';
?>