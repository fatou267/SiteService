<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

require 'entete.php';

if (isset($_SESSION['user']) ) {
   if ($_SESSION['user']['idRole'] == 1) {
    $result = '<a href="AfficherResultat.php" class="btn  btn-outline-success">Voir les anciennes publications </a>';
    $result .='<p>Si tu veux inserer un fichier ou une vidéo merci de déposer le lien sur la partie reservée au texte</p>';
       $result .= '<form class="was-validated" method="post" action="actionResultat.php" >
      <div class="mb-3">
      <label>Lien du résultats</label>
        <input type="text" name="lien" ><br>
        <label for="validationTextarea">Ajouter une nouvelle publication</label><br>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="votre commentaire....." required name="text"></textarea>
        <div class="invalid-feedback">
          Please enter your answer  .
        </div>
      </div>
       <input type="submit" name="ok">
      </form>';

      echo($result);
    } 
    else
    {
       echo 'Cliquer <a href ="AfficherResultat.php" > ici </a> pour voir les différents résultats des concours disponibles';
    } 
       
  }
  else
  {
      echo 'Veuillez vous s\'inscrire <a href="http://bambasocio.atwebpages.com/src/inscrire.php" > ici </a>';
  }
  
   
  

   require 'pied.php';
?>