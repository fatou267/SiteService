<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

require 'entete.php';
 $result ='<h5>Bienvenue dans la rubrique des bourses</h5>';
     $result .='Nos services de bourses vous facilite la vie pas besoin de se déplacer en un seul clic vous obtenez les meilleurs résultats avec Bamba socio bourse <strong id="h1">BSB</strong> .<br><br>'; 
     $result .='<div class="global">';
       $result .= '<a href="bourseetudiant.php" class="btn btn-outline-primary design"><strong>Bourses étudiants</strong></a><br><br>
     <p>Bourses étudiants:Besoin d\' informations ,hélas!! je suis perdu et je sais pas comment récupéré ma bourse sachant que je suis dans les zones les plus réculées du Sénégal<img src="http://bambasocio.atwebpages.com/src/image/smiley_nosmile.gif" >.</p><p>hé!! mon ami <strong id="h1">BSB</strong> est là vous aidé . </p><p>Dans ce rubrique bourses étudiants tu as tous les détails concernant ta bourse et comment la récupérée à distance .Avec <strong id="h1">BSB</strong> est la vie est plus facile en un seul clic <img src="http://bambasocio.atwebpages.com/src/image/smiley_smile.gif">.</p><br><br>';

     
       $result .= '<a href="boursesocial.php" class="btn btn-outline-primary design"><strong>Bourses sociales</strong></a><br><br>
     <p>Bourses sociales:Vous êtes orphelin ou vous êtes un cas social ne bénéficiant pas d\'une bourse d\'études , ne vous inquiétez pas car désormais vous pouvez vous s\'inscrire pour espérer avoir une aide sociale.<strong id="h1">BSB</strong> le meilleur service des bourses au Sénégal.</p><br><br>';

     $result .= '<a href="boursepermis.php" class="btn btn-outline-primary design"><strong>Bourse Permis de conduire</strong></a><br><br>
        <p>Bourse Permis de conduire: Le permis de conduire est devenu de nos jours une chose trés utile surtout pour les étudiants car il peut faire l\'objet de différenciation , donc contactez nous vite pour obtenir votre bourse de permis à un prix subventionné. <strong id="h1">BSB</strong> le meilleur service des bourses au Sénégal.</p><br><br>

      ';
    
      $result .= '<a href="boursesenegal.php" class="btn btn-outline-primary design"><strong>Bourses d\'études Sénégal</strong></a><br><br>
        <p>Bourses d\'études Sénégal:Avez vous entendu parler des grandes écoles de formations au Sénégal dont leur diplôme est reconnue par l\'État ,êtes vous à la recherche d\'une école de formation de qualité ,hé vous êtes au bon endroit nous vous offrirons des bourses dans nos différents écoles partenaires .Héritez pas à contacter directement <strong id="h1">BSB</strong> le meilleur service des bourses au Sénégal.</p><br><br>

      ';
        $result .= '<a href="boursemaroc.php" class="btn btn-outline-primary design"><strong>Bourses d\'études Maroc</strong></a><br><br>
       <p>Bourses d\'études Maroc: Rêvez vous de sortir dans ce pays pour aller découvrir le reste du monde tout en poursuivant vos études alors mon frére <strong id="h1">BSB</strong> est là pour vous .</p><p>Nous vous offrirons une bourse d\'études au Maroc dans les plus grandes écoles de formations marocaines avec logement assuré à un prix imbattable donc qu\'entend tu pour en bénéficier .<strong id="h1">BSB</strong> le meilleur service des bourses au Sénégal.</p><br><br> 

        ';
        $result .= '<a href="bourseetranger.php" class="btn btn-outline-primary design"><strong>Pré-inscription</strong></a><br><br>
        <p>Pré-inscription: Voulez vous continuer vos études à l\'extérieur ,révez vous d\'avoir une pré-inscription dans les trés grandes écoles de formations ou universités du monde ,nous vous aiderons à l\'obtention de votre pré-inscription et vous assister pour la demande du visa et l\'obtention d\'un logement depuis le Sénégal  à un prix imbattable donc qu\'entend tu pour en bénéficier .<strong id="h1">BSB</strong> le meilleur service des bourses au Sénégal.</p><br><br> 
        ';

         $result .='</div>';
    
      
     echo $result;


 
require 'pied.php'; 

 ?>