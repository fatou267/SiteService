<?php
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

 $sql = "SELECT * FROM Etudiant order by dateEtu DESC";
  
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
 <div class="card" style="width: 18rem; display:inline-block;">
  			<a href="http://bambasocio.atwebpages.com/bourses/pub/etud/<?= $value['image'] ?>"><img src="http://bambasocio.atwebpages.com/bourses/pub/etud/<?= $value['image'] ?>" class="card-img-top" alt="produit" width="300" height="300"></a>
  			<div class="card-body" style="text-align:center;">
    		<h5 class="card-title"><?= $value["libEtu"] ?></h5>
        <br><br>
      </div></div>
<?php endforeach ?>
<?php endif ?>
 

<?php require 'pied.php';
?>
