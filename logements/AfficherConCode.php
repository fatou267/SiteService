<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

 $sql = "SELECT * FROM ConCode order by dateConcodi DESC";
      $result = $connexion->prepare($sql);
      $var = $result->execute();

      $data = $result->fetchAll(PDO::FETCH_ASSOC);
 ?>
<?php require 'entete.php'; 
if (!isset($_SESSION['user'])) {
      echo 'Veuillez vous s\'inscrire <a href="http://bambasocio.atwebpages.com/src/inscrire.php" > ici </a>';
   }

?>
<?php
      if (empty($data)) {
         echo("Pas d'informations.Merci");
      }
      if (!empty($data)):
      foreach ($data as $key => $value) :

?>
<ul class="list-group">
      <li class="list-group-item">Libellé: <?= $value["libConCode"] ?></li>
      <li class="list-group-item">date: <?= $value["dateConcodi"] ?></li>
</ul>

<?php endforeach ?>
<?php endif ?>
   


<?php
require 'pied.php';
?>